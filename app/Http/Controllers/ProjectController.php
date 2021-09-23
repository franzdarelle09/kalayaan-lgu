<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectPhoto;
use Illuminate\Http\Request;
use Image;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::whereStatus(1)->get();
        return view('admin.projects',compact('projects'));
    }

    public function add(){
        return view('admin.project_add');
    }

    public function saveProject(Request $request){
        $project = new Project;
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->save();

        return redirect('/administration/add_project_photo/'.$project->id);
    }

    public function addProjectPhoto($project_id){
        $project = Project::findOrFail($project_id);
        return view('admin.project_photo_add',compact('project'));
    }

    public function saveProjectPhoto(Request $request){
        $project_id = $request->input('project_id');
        $image = $request->file('file');
        $imageName = time().rand(1,10000).'.'.$image->extension();
        $image->move(public_path('images/project_photos'),$imageName);

        $project_photo = new ProjectPhoto;
        $project_photo->name = $imageName;
        $project_photo->project_id = $project_id;
        $project_photo->save();
        return response()->json(['success' => $imageName]);
    }

    public function resize_crop_image($max_width, $max_height, $source_file, $dst_dir, $quality = 80){
        $imgsize = getimagesize($source_file);
        $width = $imgsize[0];
        $height = $imgsize[1];
        $mime = $imgsize['mime'];
    
        switch($mime){
            case 'image/gif':
                $image_create = "imagecreatefromgif";
                $image = "imagegif";
                break;
    
            case 'image/png':
                $image_create = "imagecreatefrompng";
                $image = "imagepng";
                $quality = 7;
                break;
    
            case 'image/jpeg':
                $image_create = "imagecreatefromjpeg";
                $image = "imagejpeg";
                $quality = 80;
                break;
    
            default:
                return false;
                break;
        }
    
        $dst_img = imagecreatetruecolor($max_width, $max_height);
        $src_img = $image_create($source_file);
    
        $width_new = $height * $max_width / $max_height;
        $height_new = $width * $max_height / $max_width;
        //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
        if($width_new > $width){
            //cut point by height
            $h_point = (($height - $height_new) / 2);
            //copy image
            imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
        }else{
            //cut point by width
            $w_point = (($width - $width_new) / 2);
            imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
        }
    
        $image($dst_img, $dst_dir, $quality);
    
        if($dst_img)imagedestroy($dst_img);
        if($src_img)imagedestroy($src_img);
    }
    //usage example
    // resize_crop_image(100, 100, "test.jpg", "test.jpg");

    public function delete(Request $request){
        $project_photos = ProjectPhoto::whereProjectId($request->input('project_id'))->get();
        foreach($project_photos as $p){
            unlink(public_path()."/images/project_photos/".$p->name);
        }
        $project = Project::findOrFail($request->input('project_id'));
        $project->delete();
    }
}
