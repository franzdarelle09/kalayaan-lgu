@extends('admin.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Document List
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>File Url</th>
                                <th>Date Uploaded</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>File Url</th>
                                <th>Date Uploaded</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($documents as $d)
                            <tr>
                                <td>{{$d->name}}</td>
                                <td>{{$d->documentlist->title}}</td>
                                <td><a href="/storage/documents/{{$d->filename}}" target="_blank">{{$d->filename}}</a></td>
                                <td>{{$d->created_at}}</td>
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