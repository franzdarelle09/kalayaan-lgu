@extends('admin.app')
@section('head_script')
    <link rel="stylesheet" href="/dropzone/min/dropzone.min.css" />
    <script src="/dropzone/min/dropzone.min.js" />
    
@endsection
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <a href="/administration/project/add" class="btn btn-sm  btn-primary mt-4">Project Photos</a>
        <div class="card my-4">
            <div class="card-header">
                
                {{ $project->name }}
            </div>
            <div class="card-body">
                <form id="dropzoneForm" class="dropzone" action="/administration/project-photo/save">
                    @csrf
                    <input type="hidden" name="project_id" value="{{ $project->id }}" />
                </form>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-success" id="upload-btn">Upload</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    Dropzone.options.dropzoneForm = {
        autoProcessQueue: false,
        acceptedFiles: ".png, .jpg, .jpeg",
        parallelUploads: 24,
        
        init: function(){
            var uploadBtn = document.getElementById("upload-btn");
            myDropzone = this;
            uploadBtn.addEventListener("click", function(){
                myDropzone.processQueue()             
            })

            this.on("complete",function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles() == 0){
                    var _this = this
                    _this.removeAllFiles()

                }
            })
        }
    }
</script>
@endsection