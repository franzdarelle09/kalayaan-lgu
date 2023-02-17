@extends('admin.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Hotlines
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
                        <form id="hotlines-form" method="POST">
                            @csrf
                            <input type="hidden" id="hotlines-id" name="id" value="" />
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title" required/>
                            </div>

                            <div class="form-group">
                                <label>Contact Name</label>
                                <input type="text" class="form-control" name="contact_name" id="contact-name" />
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" id="address"/>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email"/>
                            </div>

                            <div class="form-group">
                                <label>Landline</label>
                                <input type="text" class="form-control" name="landline" id="landline"/>
                            </div>

                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile"/>
                            </div>

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
                    <table class="table table-bordered" id="dataTableHotlines" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Contact Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Landline</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hotlines as $h)
                            <tr>
                                <td>{{ $h->id }}</td>
                                <td>{{$h->title}}</td>
                                <td>{{$h->contact_name}}</td>
                                <td>{{$h->address}}</td>
                                <td>{{$h->email}}</td>
                                <td>{{$h->landline}}</td>
                                <td>{{$h->mobile}}</td>
                                <td>
                                    <button style="padding: 5px;" class="btn btn-sm btn-danger update-btn" data-hotlines-id="<?= $h->id ?>"> <i class="fas fa-edit"></i> </button>&nbsp;
                                    <button style="padding: 5px;" class="btn btn-sm btn-danger delete-btn" data-hotlines-id="<?= $h->id ?>"> <i class="fa fa-trash"></i> </button>
                                </td>

                            </tr>                                                                                   
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-danger add-btn float-right""> Add Hotline </button>
                    </div>
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
            $('#dataTableHotlines').DataTable({
                columnDefs: [
                    {   "targets": [0],
                        "visible": false,
                        "searchable": false
                    },
                ]
            });
        });
        $('#exampleModal').on('shown.bs.modal', function () {
            $('#image-name').val('');
            $('#myInput').trigger('focus')
        });

        $(".add-btn").on('click', function(){
            $(".modal-title").html('Create Hotline');
            $("#hotlines-id").val('');
            $("#title").val('');
            $("#contact-name").val('');
            $("#address").val('');
            $("#email").val('');
            $("#landline").val('');
            $("#mobile").val('');

            $('.hidden-btn').click();
        });

        $(".update-btn").on('click', function() {
            let id = $(this).data('hotlines-id');

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:'/administration/hotlines/details',
                data: {id:id},
                success: function(res) {
                    console.log(res);

                    $(".modal-title").html('Create Hotline');
                    $("#hotlines-id").val(res.id);
                    $("#title").val(res.title);
                    $("#contact-name").val(res.contact_name);
                    $("#address").val(res.address);
                    $("#email").val(res.email);
                    $("#landline").val(res.landline);
                    $("#mobile").val(res.mobile);

                    $('.hidden-btn').click();
                }
            });
        });

        $(".delete-btn").on('click', function() {
            let id = $(this).data('hotlines-id');

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:'/administration/hotlines/delete',
                data: {id:id},
                success: function(res) {
                    window.location.reload();
                }
            });
        });

        $("#submit-btn").on('click', function() {
            $("#hotlines-form").submit();
        });
    });
</script>
@endsection