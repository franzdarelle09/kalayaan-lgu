@extends('admin.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css"  />
<style type="text/css">
    img {
        display: block;
        
        max-width: 100%;
    }
    .preview {
        overflow: hidden;
        width: 260px; 
        height: 195px;
        margin: 10px;
        border: 1px solid red;
    }
</style>
<div class="row justify-content-center">
    <div class="row">
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="z-index: 1051;">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Crop image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-8">  
                                    <!--  default image where we will set the src via jquery-->
                                    <img id="image">
                                </div>
                                <div class="col-md-4">
                                    <div class="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="crop">Crop</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-10">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h4 class="text-center font-weight-light my-2">Create News</h4></div>
            <div class="card-body">
                @include('flash-message')
                <form method="post"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="thumbnail-image" name="thumbnail_image" value="" />
                    <div class="form-group">
                        <label class="small mb-1" for="titlr">Title</label>
                        <input type="text" name="title" class="form-control py-4">
                    </div>
                    
                    <div class="form-group">
                        <textarea    tarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="small mb-1" for="article_photo">Article Photo</label>
                        <br>
                        <input type="file" name="article_photo" accept=
                        "image/*" required>
                    </div>
                   
                    <div class="form-group" id="thumb-row">
                        <label class="small mb-1" for="document_type">Thumbnail (520 pixels x 390 pixels)</label>
                        <br>
                        <input type="file" class="image" name="thumbnail" accept=
                        "image/*">
                    </div>
                   
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <span></span>
                        <button class="btn btn-primary" type="submit">Add News</button>
                    </div>

                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script>

    var bs_modal = $('#modal');
    var image = document.getElementById('image');
    var cropper,reader,file;
   

    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            bs_modal.modal('show');
        };


        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    bs_modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 520/390,
            viewMode: 0,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 520,
            height: 390,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
				//alert(base64data);
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/administration/image/crop",
                    data: {image: base64data, path: 'article_photos/thumbnail'},
                    success: function(data) { 
                        $('#thumbnail-image').val(data);
                        bs_modal.modal('hide');
                    }
                });
            };
        });
    });

</script>
<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#custom_thumb").on("click",function(){
            
            if ($("#custom_thumb").prop('checked')){           
                $("#thumb-row").removeClass('hide');
            }else{
                $("#thumb-row").addClass('hide');     
            }
        });
        $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.editorConfig = function( config ) {
    config.height = 700;
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
};
   
</script>
@endsection