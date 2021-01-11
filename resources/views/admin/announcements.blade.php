@extends('admin.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Announcements
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                                
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($announcements as $a)
                            <tr>
                                <td>{{$a->title}}</td>
                                <td><img src="/storage/announcement/{{$a->photo}}" style="height: 200px; width: auto;" /></td>
                                <td><?= date('d M, Y',strtotime($a->created_at)); ?></td>
                                <td>
                                    {{-- <a class="btn btn-primary" href="/administration/news/edit/{{$n->id}}">Edit</a> --}}
                                    <button class="btn btn-danger delete" data-id="{{$a->id}}">Delete</button>
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
        $(".delete").on("click", function(){
            announcement_id = $(this).data('id');
            $.ajax({
                type: 'GET',
                url: '/administration/announcements/delete',
                data: {announcement_id: announcement_id},
                success: function(d){
                    window.location.reload();
                }
            })
        })
    });
</script>
@endsection