<?php

namespace App\Http\Controllers\Web;
use App\Models\Cats;
use App\Models\Exam;
use App\Models\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function show($id){
 
        //$data['exam']= Exam::findOrFail($id);
        //return view('web.exams.show')->with($data);

        $exam = Exam::findOrFail($id);
        return view('web.exams.show',compact('exam'));
    }

    public function start($examId){
        
        $user=Auth::user();
        $user->exams()->attach($examId);
        return redirect(url("/exams/questions/$examId"));

    }

    public function questions($id){
        $data['exam']= Exam::findOrFail($id);
        return view('web.exams.questions')->with($data);
    }


    public function submit($examId,Request $request){
        $request->validate([
            'answers'=>'required|array',
            'answers.*'=>'required|in:1,2,3,4',

        ]);
        $points = 0;
        $exam=Exam::findOrFail($examId);
        $totalQuestionsNumber = $exam->Questions->count();

        foreach($exam->questions as $question){
            //dd($question);
            if (isset($request->answers[$question->id])) {
                $userAnswer = $request->answers[$question->id];
                $rightAnswer= $question->right_answer;

                if ($userAnswer == $rightAnswer) {
                    $points++;
                }
            }

        }
        
       $score = ($points/$totalQuestionsNumber) *100;
       $submitTime=Carbon::now();
       $user = Auth::user();
       $pivotRow=$user->exams()->where('exam_id',$examId)->first();
       $startTime = $pivotRow->pivot->created_at;
       $timeMins = $submitTime->diffInMinutes($startTime);
       
       $user->exams()->updateExistingPivot($examId,[
        'score'=>$score,
        'time_mins'=>$timeMins,

       ]);
       return redirect(url("/exams/show/$examId"));
    }
}


