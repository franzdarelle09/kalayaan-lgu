@extends('admin.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                News List
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
                            @foreach($news as $n)
                            <tr>
                                <td>{{$n->title}}</td>
                                <td><img src="/storage/article_photos/thumbnail/{{$n->medium_thumb}}" /></td>
                                <td><?= date('d M, Y',strtotime($n->created_at)); ?></td>
                                <td>
                                    <a class="btn btn-primary" href="/administration/news/edit/{{$n->id}}">Edit</a>
                                    <button class="btn btn-danger delete" data-id="{{$n->id}}">Delete</button>
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
            news_id = $(this).data('id');
            $.ajax({
                type: 'GET',
                url: '/administration/news/delete',
                data: {news_id: news_id},
                success: function(d){
                    window.location.reload();
                }
            })
        })
    });
</script>
@endsection