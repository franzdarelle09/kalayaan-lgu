@extends('admin.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h4 class="text-center font-weight-light my-2">Update Department</h4></div>
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
                        <textarea class="ckeditor form-control" name="wysiwyg-editor">
                            @if($dep !== null){{$dep->contents}}@endif
                        </textarea>
                    </div>
                    
                    
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <span></span>
                        <button class="btn btn-primary" type="submit">Update Department</button>
                    </div>

                
                

                @endif
                </form>    
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#department_id").on("change", function(){
            department_id = $(this).val();
            if(department_id != 0){
                window.location="/administration/departments/"+department_id;
            }
            
        }); 
        $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.editorConfig = function( config ) {
    config.height = 700;
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
};
   
</script>
@endsection