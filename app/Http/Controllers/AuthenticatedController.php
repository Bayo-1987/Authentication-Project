<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\JuniorSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\SeniorSubject;
use Illuminate\Support\Facades\Hash;

class AuthenticatedController extends Controller
{
    //
    public function index(){

        $student = User::where('role', 'student')->get();
        $teacher = User::where('role', 'teacher')->get();
        $classes = ClassModel::all();
        $junior_subject = JuniorSubject::all();
        $senior_subject = SeniorSubject::all();
        return view('backend.index', compact('student', 'teacher', 'classes', 'junior_subject', 'senior_subject'));
        //$student = User::where('role', 'student')->get();
        //$teacher = User::where('role', 'teacher', 'director')->get();
        //return view('backend.index', compact('student', 'teacher'));
    }

    public function showteachers(){
        $teacher = User::where('role', 'teacher')->get();
        return view('backend.view_teachers', compact('teacher'));
    }


    public function showstudents(){

        $student = User::where('role', 'student')->get();
        return view('backend.view_students', compact('student'));
    }


    public function logout(){
        Auth::Logout();
        return redirect()->route('login');
    }
    public function profile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.profile', compact('user'));
    }
    public function edit(){
        $id = Auth::user()->id;
        $editprofile = User::find($id);
        return view('backend.editpro', compact('editprofile'));
    }
    public function update(Request $request){
        $id = Auth::user()->id;
        $updateprofile = User::find($id);
        $updateprofile->name = $request->name;
        $updateprofile->lastname = $request->lastname;
        $updateprofile->phone = $request->phone;
        $updateprofile->address = $request->address;
        $updateprofile->save();
        return redirect()->back()->with('SuccessMsg', 'Profile successfully updated');
    }
    public function changepassword(){
        return view('backend.change_password');
    }
    public function updatepassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $hashedPassword )){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }
        else{
            return redirect()->back();
        }

    }

}
