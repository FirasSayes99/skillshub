<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $cats = Cats::select('id','name')->where('active','1')->get();
        return view('web.index',compact('cats'));

    }
}
