<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\Cats;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;



class CatsController extends Controller
{
    public function index(){
        $cats = Cats::select('id','name')->get();
        return view('web.index',compact('cats'));

    }

    public function show($id){
        //$cat =Cats::findOrFail($id);
        //$cats = Cats::select('id','name')->get();//// طريقة اضافة ال داتا بال كومباكت compact
        $data['cat']=Cats::findOrFail($id);
        $data['cats']=Cats::select('id','name')->get();
        $data['skills']=$data['cat']->skills;
        

        return view('web.cat.show')->with($data);

    }
}
