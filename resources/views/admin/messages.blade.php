@extends('admin.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Messages
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>IP Address</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>IP Address</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($messages as $m)
                            <tr>
                                <td>{{$m->name}}</td>
                                <td>{{$m->email}}</td>
                                <td>{{$m->message}}</td>
                                <td>{{$m->ipaddress}}</td>
                                <td><?= date('d M, Y H:i',strtotime($m->created_at)); ?></td>
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