@extends('admin.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h4 class="text-center font-weight-light my-2">Update Department Members</h4></div>
            <div class="card-body">
                <form method="post" action="/administration/departments"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <select name="department_id" id="department_id" class="form-control">
                            <option value="0">Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}" @if($department->id == $id) {{'selected'}} @endif>
                                    {{$department->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @if($id != 0)
                
                    
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="">
                    </div> 
                    
                    
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <span></span>
                        <button class="btn btn-primary" type="submit">Update Department Members</button>
                    </div>

                
                

                @endif
                </form>    
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('script')

<script type="text/javascript">
    $(document).ready(function () {
        $("#department_id").on("change", function(){
            department_id = $(this).val();
            if(department_id != 0){
                window.location="/administration/departments/members/"+department_id;
            }
            
        }); 
        
    });
</script>

@endsection