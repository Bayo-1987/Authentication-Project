<?php

namespace App\Http\Controllers;

use App\Models\JuniorResult;
use App\Models\SeniorResult;
use Illuminate\Http\Request;
use App\Models\User;

class ResultController extends Controller
{
    public function add_result()
    {
        // 
        $admission = User::all();
        return view('backend.create_result', compact('admission')); 
    }

    public function store_result(Request $request)
    {
        //
        $validateData = $request->validate([
            'english' => '|numeric|max:100',
            'mathematics' => '|numeric|max:100',
            'basic_science' => '|numeric|max:100',
            'home_economics' => '|numeric|max:100',
            'basic_tech' => '|numeric|max:100',
            'computer' => '|numeric|max:100',
            'social' => '|numeric|max:100',
            'french' => '|numeric|max:100',
            'civic_education' => '|numeric|max:100',
            'admission_num'=> 'required|unique:junior_results'
        ]);

        $junior_result = new JuniorResult();
        $junior_result->english = $request->english;
        $junior_result->mathematics = $request->mathematics;
        $junior_result->basic_science = $request->basic_science;
        $junior_result->home_economics = $request->home_economics;
        $junior_result->french = $request->french;
        $junior_result->basic_tech = $request->basic_tech;
        $junior_result->computer = $request->computer;
        $junior_result->social_studies = $request->social_studies;
        $junior_result->civic_education = $request->civic_education;
        $junior_result->admission_num = $request->admission_num;

        $junior_result->save();
        return redirect()->back()->with('SuccessMsg', 'Result successfully added');
    }
    public function add_senior_result()
    {
        // 
        $admission = User::all();
        return view('backend.create_senior_result', compact('admission')); 
    }
    public function store_senior_result(Request $request)
    {
        //
        $validateData = $request->validate([
            'english' => '|numeric|max:100',
            'mathematics' => '|numeric|max:100',
            'chemistry' => '|numeric|max:100',
            'physic' => '|numeric|max:100',
            'biology' => '|numeric|max:100',
            'computer' => '|numeric|max:100',
            'government' => '|numeric|max:100',
            'literature' => '|numeric|max:100',
            'economics' => '|numeric|max:100',
            'civic_education' => '|numeric|max:100',
            'admission_num'=> 'required|unique:junior_results'
        ]);

        $senior_result = new SeniorResult();
        $senior_result ->english = $request->english;
        $senior_result->mathematics = $request->mathematics;
        $senior_result->chemistry = $request->chemistry;
        $senior_result->physics = $request->physics;
        $senior_result->biology  = $request->biology;
        $senior_result->government = $request->government;
        $senior_result->computer = $request->computer;
        $senior_result->economics = $request->economics;
        $senior_result->literature = $request->literature;
        $senior_result->civic_education = $request->civic_education;
        $senior_result->admission_num = $request->admission_num;

        $senior_result->save();
        return redirect()->back()->with('SuccessMsg', 'Result successfully added');
    }

}
