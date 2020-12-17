@extends('admin.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h4 class="text-center font-weight-light my-2">Create News</h4></div>
            <div class="card-body">
                <form method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="small mb-1" for="titlr">Title</label>
                        <input type="text" name="title" class="form-control py-4">
                    </div>
                    
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="small mb-1" for="article_photo">Article Photo</label>
                        <br>
                        <input type="file" name="article_photo" accept=
                        "image/*" required>
                    </div>
                   <div class="form-group">
                    <input type="checkbox" value="1" id="custom_thumb"> Custom Thumbnail
                   </div>
                    <div class="form-group hide" id="thumb-row">
                        <label class="small mb-1" for="document_type">Thumbnail (520 pixels x 390 pixels)</label>
                        <br>
                        <input type="file" name="thumbnail" accept=
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