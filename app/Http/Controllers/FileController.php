<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Issue;
use Illuminate\Http\Request;
use Storage;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Issue $issue)
    {
        return view('admin.file.add', compact('issue'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req, Issue $issue)
    {
        if ($req->hasFile('file')) {
            
            $file = $req->file('file');
            $file_name = uniqid().'.'. $file->getClientOriginalExtension();
            $path = $file->storeAs('public\assets\file-store', $file_name);//

            if ($path) {
                // $issue = Issue::findOrFail($issue_id);
                $issue->files()->create(['name'=>$file_name]);
                return response()->json(['status'=>'success'],200);
            }else{
                return response()->json(['status'=>'Failed'],401);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        if (Storage::delete('public/assets/file-store'.$file->name)) {
            //if deleted successfully from folder then delete from DB
            $file->delete();
            return back()->with('success', 'تم مسح الملف بنجاح');
        }else{
            return back()->with('faild', 'يوجد مشكله ما');
        }
    }
}
