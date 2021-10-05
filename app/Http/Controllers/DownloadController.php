<?php

namespace App\Http\Controllers;

use App\Models\AssignClass;
use App\Models\JuniorResult;
use App\Models\SeniorResult;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class DownloadController extends Controller
{
    //
    public function downloadPDF($id){
            $user = User::where('admission_num', $id)->first(); 
            $classes = AssignClass::where('admission_num', $id)->first();
            $junior = JuniorResult::where('admission_num', $id)->first();
            
            //Condition
            if($user == true && $junior == true){
            $pdf = PDF::loadview('backend.result', compact('junior', 'user', 'classes'));
            return $pdf->download('junior_result.pdf');
        }
        else{
            return view ('backend.no_result');
        }
    }

    //For senior
    public function downloadseniorPDF($id){
        $user = User::where('admission_num', $id)->first(); 
        $classes = AssignClass::where('admission_num', $id)->first();
        $senior = SeniorResult::where('admission_num', $id)->first();
        //Condition
        if($user == true && $senior == true){
        $pdf = PDF::loadview('backend.result_senior', compact('senior', 'user', 'classes'));
        return $pdf->download('senior_result.pdf');
    }
    else{
        return view ('backend.no_result');
    }
}

    //For view result
    public function view_result($id){
        $user = User::where('admission_num', $id)->first(); 
        $classes = AssignClass::where('admission_num', $id)->first();
        $senior = SeniorResult::where('admission_num', $id)->first();
        $junior = JuniorResult::where('admission_num', $id)->first();
        if($user == true && $senior == true && $classes == true){
        return view ('backend.view_result_senior', compact('user', 'classes', 'senior'));
    }
    else{
        return view ('backend.no_result');
    }
}


}


