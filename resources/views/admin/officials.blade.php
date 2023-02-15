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
        width: 263px; 
        height: 230px;
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
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Officials
            </div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary hidden-btn" data-toggle="modal" data-target="#exampleModal" style="display: none;">
                Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="officials-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="officials-id" name="id" value="" />
                            <input type="hidden" id="image-name" name="image_name" value="" />
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="name" required/>
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title" readonly="readonly" required/>
                            </div>

                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook"/>
                            </div>

                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="twitter"/>
                            </div>

                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control" name="instagram" id="instagram"/>
                            </div>

                            <input type="file" accept="image/*" class="image" name="officials_photo" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submit-btn">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="table-responsive">
                    @include('flash-message')
                    <table class="table table-bordered" id="dataTableHighlights" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($officials as $o)
                            <tr>
                                <td>{{$o->name}}</td>
                                <td>{{$o->title}}</td>
                                <td><a href="/storage/officials_photos/<?= $o->image ?? 'default.png' ?>" target="_blank">Preview</a></td>
                                <td>
                                    <button class="btn btn-sm btn-danger update-btn" data-officials-id="<?= $o->id ?>"> Update Official </button>
                                </td>

                            </tr>                                                                                   
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
        var finalCropWidth = 263;
        var finalCropHeight = 230;
        var finalAspectRatio = finalCropWidth / finalCropHeight;
        cropper = new Cropper(image, {
            aspectRatio: 263/230,
            viewMode: 0,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 263,
            height: 230,
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
                    data: {image: base64data, path: 'officials_photos'},
                    success: function(data) { 
                        $('#image-name').val(data);
                        bs_modal.modal('hide');
                        alert(data);
                    }
                });
            };
        });
    });

</script>
<script>
    $(document).ready(function(){
        $(document).ready(function() {
            $('#dataTableHighlights').DataTable({
                order: [[2, 'asc']]
            });
        });
        $('#exampleModal').on('shown.bs.modal', function () {
            $('#image-name').val('');
            $('#myInput').trigger('focus')
        });

        $(".update-btn").on('click', function() {
            let id = $(this).data('officials-id');

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:'/administration/officials/details',
                data: {id:id},
                success: function(res) {
                    console.log(res);
                    $(".modal-title").html('Update Official');
                    $("#name").val(res.name);
                    $("#title").val(res.title);
                    $("#facebook").val(res.facebook);
                    $("#twitter").val(res.twitter);
                    $("#instagram").val(res.instagram);
                    $("#officials-id").val(res.id);
                    $('.hidden-btn').click();
                }
            });
        });
        $("#submit-btn").on('click', function() {
            $("#officials-form").submit();
        });
    });
</script>
@endsection