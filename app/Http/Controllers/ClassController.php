<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classData = ClassModel::all();
        return view('backend.manage_class', compact('classData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('backend.create_class'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'classes' => 'required|unique:class_models',
        ]);

        $classData = new ClassModel();
        $classData->classes = $request->classes;
        $classData->save();
        return redirect()->back()->with('SuccessMsg', 'Class successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $data = User::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
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
        $validatedData = $request->validate([
            'classes' => ['max:10'],
        ]);
        $classupdate = ClassModel::find($id);
        $classupdate->classes = $request->classes;
        $classupdate->save();
        return redirect()->back()->with('SuccessMsg', 'Class successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteClass = ClassModel::find($id);
        //unlink(public_path('upload/studentphoto/').$deleteStudent->image);
        $deleteClass->delete();
        return redirect()->back()->with('SuccessMsg', 'Class successfully deleted');

    }
}
