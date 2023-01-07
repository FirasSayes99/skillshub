<?php

namespace App\Http\Controllers\Web;
use App\Models\Cats;
use App\Models\Exam;
use App\Models\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function show($id){
 
        //$data['exam']= Exam::findOrFail($id);
        //return view('web.exams.show')->with($data);

        $exam = Exam::findOrFail($id);
        return view('web.exams.show',compact('exam'));
    }

    public function questions($id){
        $data['exam']= Exam::findOrFail($id);
        return view('web.exams.questions')->with($data);
    }
}
