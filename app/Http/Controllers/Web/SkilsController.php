<?php

namespace App\Http\Controllers\Web;
use App\Models\Cats;
use App\Models\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkilsController extends Controller
{
    public function show($id){

        $data['skill']= Skills::findOrFail($id);
        $data['cats']=Cats::select('id','name')->get();

        return view('web.skills.show')->with($data);

    }
}
