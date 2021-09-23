@extends('admin.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <a href="/administration/project/add" class="btn btn-sm  btn-primary mt-4">Add Project</a>
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Projects
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Project Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($projects as $p)
                            <tr>
                                <td>{{$p->name}}</td>
                                <td>{{$p->description}}</td>
                                <td>
                                    <a href="/administration/add_project_photo/<?= $p->id ?>" class="btn btn-sm btn-primary"> Add Project Photos </a>
                                    <button class="btn btn-sm btn-danger delete-btn" data-project-id="<?= $p->id ?>"> Delete Project </button>

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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".delete-btn").on("click", function(){
            project_id = $(this).data('project-id');
            $.ajax({
                type: 'POST',
                url: '/administration/projects/delete',
                data: {project_id: project_id},
                success: function(d){
                    window.location.reload();
                }
            })
        })
    });
</script>
@endsection