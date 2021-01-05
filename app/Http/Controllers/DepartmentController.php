<?php

namespace App\Http\Controllers;

use App\Department;
use App\Member;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug)
    {
        $department = Department::whereSlug($slug)->first();
        return view('department-details',compact('department'));
    }

    public function members($slug)
    {
        $department = Department::whereSlug($slug)->first();
        $members = Member::where('department_id',$department->id)->get();
        return view('department-members',compact('department','members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = Department::find($request->input('department_id'));
        $department->contents = $request->input('wysiwyg-editor');
        $department->save();
        return redirect('/administration/departments/'.$department->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }

    public function updateContent($id = 0){
        $departments = Department::orderBy('name','asc')->get();
        $dep = ($id == 0) ? null : Department::find($id);
        return view('admin.department',compact('id','departments','dep'));
    }

    public function updateMember($id = 0){
        $departments = Department::orderBy('name','asc')->get();
        $dep = ($id == 0) ? null : Department::find($id);
        $members = Member::whereDepartmentId($id)->get();
        return view('admin.department-members',compact('id','departments','dep','members'));
    }

    public function storeMember(Request $request){
        $names = $request->input('name');
        $position = $request->input('position');
        $mem_delete = Member::whereDepartmentId($request->input('department_id'))->delete();
        


    }
}
