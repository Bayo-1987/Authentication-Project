<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classAssign = ClassModel::all();
        $studentData = User::latest()->where('role', 'student')->paginate(5);
        return view('backend.manage_student', compact('studentData', 'classAssign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('backend.create'); 
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
            'name' => 'required',
            'lastname' => 'required',
            'phone'=> 'required|max:11',
            'gender'=> 'required',
            'role'=>'required',
            'date_of_birth' => 'required',
            'email'=> 'required|unique:users',
            'year'=>'required',
            'image'=>'required|mimes:jpeg, jpg, png'
        ]);
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').uniqid().$file->getClientOriginalName();
            $file->move(public_path('upload/studentphoto'),$filename);
        }
        else{
            $filename = 'default.png';
        }
        //Generating Admission number
        $dataReg = rand(1, 1000);
        if($dataReg < 10){
            $id_no = '000'.$dataReg;
        }
        elseif($dataReg < 100){
            $id_no = '00'.$dataReg;
        }
        elseif($dataReg < 1000){
            $id_no = '0'.$dataReg;
        }
        $studentData = new User();
        $studentData->name = $request->name;
        $studentData->lastname = $request->lastname;
        $studentData->role = $request->role;
        $studentData->gender = $request->gender;
        $studentData->year = $request->year;
        $studentData->image = $filename;
        $studentData->date_of_birth = $request->date_of_birth;
        $studentData->email = $request->email;
        $studentData->phone = $request->phone;
        $studentData->address = $request->address;
        $code = rand(0000, 9999);
        $studentData->code = $code;
        $studentData->password = bcrypt($code);
        $final_id = 'STU'.$request->year.$id_no;
        $studentData->admission_num = $final_id;
        $studentData->save();
        return redirect()->back()->with('SuccessMsg', 'Student successfully registered');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::where('id', $id)->first();
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
            'name' => ['max:25'],
            'lastname' => ['max:25'],
            'image' => ['mimes:jpg, jpeg, png'],
        ]);
        $studentupdate = User::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            unlink(public_path('upload/studentphoto/').$studentupdate->image);
            $filename = date('YmdHi').uniqid().$file->getClientOriginalName();
            $file->move(public_path('upload/studentphoto'), $filename);
        }
        else{
            $filename = $studentupdate->image;
        }
        $studentupdate->name = $request->name;
        $studentupdate->lastname = $request->lastname;
        $studentupdate->phone = $request->phone;
        $studentupdate->date_of_birth = $request->date_of_birth;
        $studentupdate->email = $request->email;
        $studentupdate->address =$request->address;
        $studentupdate->gender =$request->gender;
        $studentupdate->image = $filename;
        $studentupdate->save();
        return redirect()->back()->with('SuccessMsg', 'Student successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteStudent = User::find($id);
        unlink(public_path('upload/studentphoto/').$deleteStudent->image);
        $deleteStudent->delete();
        return redirect()->back()->with('SuccessMsg', 'Records of student successfully deleted');

    }
}
