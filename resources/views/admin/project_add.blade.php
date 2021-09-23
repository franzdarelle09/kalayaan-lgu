@extends('admin.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card my-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Projects
            </div>
            <div class="card-body">
               <form method="POST" action="/administration/project/save"> 
                @csrf
               <div class="form-group">
                   <label>Project Name</label>
                   <input type="text" name="name" class="form-control" required>
               </div>
               <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <button class="btn btn-primary btn-sm" type="submit" name="save">SAVE</button>
               </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
  
</script>
@endsection