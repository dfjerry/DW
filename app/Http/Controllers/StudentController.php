<?php

namespace App\Http\Controllers;

use App\SurveyStudent;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function surveyStudent(){
        return view('survey-student');
    }
    public function postSurveyStudent(Request $request){
        $survey = new SurveyStudent;
        $survey->student_name = $request->student_name;
        $survey->email = $request->email;
        $survey->telephone = $request->telephone;
        $survey->feedback = $request->feedback;
        $survey->save();
        return response()->json(['success'=>'Form is successfully submited!!!']);
    }
}
