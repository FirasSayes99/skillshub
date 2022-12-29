<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\Cats;
use Illuminate\Http\Request;



class CatsController extends Controller
{
    public function index(){
        $cats = Cats::select('id','name')->get();
        return view('web.index',compact('cats'));

    }

    public function show($id){
        $cat = Cats::findOrFail($id);

        return view('web.cat.show',compact('cat'));

    }
}
