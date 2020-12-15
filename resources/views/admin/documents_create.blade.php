@extends('admin.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h4 class="text-center font-weight-light my-2">Document Upload</h4></div>
            <div class="card-body">
                <form method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="small mb-1" for="name">Name</label>
                        <input type="text" name="name" class="form-control py-4">
                    </div>
                    
                    <div class="form-group">
                        <label class="small mb-1" for="document_type">Document Type</label>
                        <select name="documentlist_id" class="select-control py-2">
                            @foreach($document_types as $dt)
                                <option value="{{$dt->id}}">{{$dt->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <div class="form-group">
                            <label class="small mb-1" for="document_type">File</label>
                            <br>
                            <input type="file" name="document" accept=
                            "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                            text/plain, application/pdf, image/*" required>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <span></span>
                        <button class="btn btn-primary" type="submit">Add Document</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection