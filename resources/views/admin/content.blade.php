@extends('admin.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h4 class="text-center font-weight-light my-2">Update {{ $content->name }}</h4></div>
            <div class="card-body">
                <form method="post" action="/administration/contents"  enctype="multipart/form-data">
                    @csrf
                    @if($content)
                        @include('flash-message')
                        <input type="hidden" name="id" value="{{ $content->id }}" />
                        <div class="form-group">
                            <textarea class="ckeditor form-control" name="body" style="height: 1200px;">
                                @if($content !== null){{$content->body}}@endif
                            </textarea>
                        </div>
                        
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <span></span>
                            <button class="btn btn-primary" type="submit">Update {{ $content->name }}</button>
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
        $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('body', {
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