@extends('admin.app')
@section('content')

<div class="row justify-content-center">
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
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="hidden" id="highlight-id" name="id" value="" />
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title" required/>
                            </div>
                            <input type="file" accept="image/*" name="highlights_photo" />
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