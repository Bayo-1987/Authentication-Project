<?php

namespace App\Http\Controllers;

use App\Models\JuniorSubject;
use Illuminate\Http\Request;

class JuniorSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjectData = JuniorSubject::all();
        return view('backend.manage_junior_subject', compact('subjectData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('backend.create_junior_subject'); 
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
            'subjects' => 'required|unique:junior_subjects',

        ]);

        $subjectData = new JuniorSubject();
        $subjectData->subjects = $request->subjects;
        $subjectData->save();
        return redirect()->back()->with('SuccessMsg', 'Subject successfully created');
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
            'subjects' => ['max:20'],
        ]);
        $subjectupdate = JuniorSubject::find($id);
        $subjectupdate->subjects = $request->subjects;
        $subjectupdate->save();
        return redirect()->back()->with('SuccessMsg', 'Subject successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteSubject = JuniorSubject::find($id);
        //unlink(public_path('upload/studentphoto/').$deleteStudent->image);
        $deleteSubject->delete();
        return redirect()->back()->with('SuccessMsg', 'Subject successfully deleted');

    }
}
