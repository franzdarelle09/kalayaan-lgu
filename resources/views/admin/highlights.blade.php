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
        width: 285px; 
        height: 225px;
        margin: 10px;
        border: 1px solid red;
    }
    
</style>
<div class="row justify-content-center">
    <div class="row">
        <div class="modal fade" data-backdrop="static" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="z-index: 1051;">
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
                Highlights
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
                        <form id="highlight-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="image-name" name="image_name" value="" />
                            <input type="hidden" id="highlight-id" name="id" value="" />
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title" required/>
                            </div>
                            <input type="file" accept="image/*" class="image" name="highlights_photo" />
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
                                <th>Title</th>
                                <th>Order</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Order</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($highlights as $h)
                            <tr>
                                <td>{{$h->title}}</td>
                                <td>{{$h->highlight_number}}</td>
                                <td><a href="/storage/highlights_photos/<?= $h->image ?>" target="_blank">Preview</a></td>
                                <td>
                                    <button class="btn btn-sm btn-danger update-btn" data-highlights-id="<?= $h->id ?>"> Update Highlights </button>
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

        cropper = new Cropper(image, {
            aspectRatio: 380/300,
            viewMode: 0,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 380,
            height: 300,
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
                    data: {image: base64data, path: 'highlights_photos'},
                    success: function(data) { 
                        $('#image-name').val(data);
                        bs_modal.modal('hide');
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
            $('#myInput').trigger('focus')
        });

        $(".update-btn").on('click', function() {
            let id = $(this).data('highlights-id');

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:'/administration/highlights/details',
                data: {id:id},
                success: function(res) {
                    console.log(res);
                    $(".modal-title").html('Higlight Number '+res.highlight_number);
                    $("#title").val(res.title);
                    $("#highlight-id").val(res.id);
                    $("#image-name").val(res.image);
                    $('.hidden-btn').click();
                }
            });
        });
        $("#submit-btn").on('click', function() {
            $("#highlight-form").submit();
        });
    });
</script>
@endsection