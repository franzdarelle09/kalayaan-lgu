<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Document;
use \App\Documentlist;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::orderBy('name','asc')->get();
        return view('admin.documents',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document_types = Documentlist::whereActive(1)->get();
        return view('admin.documents_create',compact('document_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('document')){
            $fileNameWithExtension = $request->file('document')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            $extension = $request->file('document')->guessClientExtension();
            $fileNameToStore = time().'_'.$filename.'.'.$extension;
            $path = $request->file('document')->storeAs('public/documents',$fileNameToStore);
        }else{
            $fileNameToStore = 'nofile.pdf';
        }

        $document = ($request->input('document_id') !== NULL)  ? Document::findOrFail($request->document_id) : new Document;
        $document->name = $request->input('name');
        $document->filename = $fileNameToStore;
        $document->documentlist_id = $request->input('documentlist_id');
        $document->save();
        return redirect('/administration/documents/add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
