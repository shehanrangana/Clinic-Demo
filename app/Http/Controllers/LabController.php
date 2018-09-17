<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\File;
use Input;
use Validator;
use Redirect;

class LabController extends Controller
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
        $file = Input::get('file');

        $rules =  array(
            'id' => 'required',
            'name' => 'required',
            'file' => 'file|required|max:20000|'
             );

        $validator = Validator::make(Input::all(),  $rules);

        if ($validator->fails()) {
            $msg = $validator->messages();
            return redirect('/la')->with('error', 'Again check your filling form!!');
        
        } else if ($validator->passes()) {
            $filename = $request->file('file')->getClientOriginalName();

            $request->file->move($filename, '/files');

            $file = new File;
            $file->id = $request->input('id');
            $file->name = $request->input('name');
            $file->file =  $filename;
            $file->save();

            return redirect('/la')->with('success', 'File Upload Successfull!!');
        }
        

        // $this->validate($request, [
        //     'id' => 'required',
        //     'name' => 'required',
        //     'file' => 'file|nullable|max:2999|mimes:pdf'
        // ]);
        //Handle file upload
        // if ($request->hasFile('file')) {
        //     //get File name wiith ext
        //     $filenameWithExt = $request->file('file')->getClientOriginalName();
        //     //file name
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     //EXT
        //     $ext = $request->file('file')->getClientOriginalExtension();
        //     //filename to store
        //     $filenameToStore = $filename.'_'.time().'.'.$ext;
        //     //upload image
        //     $path = $request->file('file')->storeAs('public/files', $filenameToStore);
        // } else {
        //     $filenameToStore = 'noimage.jpg';
        // }

        // if ($request->hasFile('file')) {
        //     $filename = $request->file('file')->getClientOriginalName();
        //     // $filename = Input::get('filename');

        //     $request->file('file')->storeAs('public/files', $filename);
        // }

        
        // $file = new File;
        // $file->id = $request->input('id');
        // $file->name = $request->input('name');
        // $file->file =  $filename;
        // $file->save();
        // echo $filename;
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
