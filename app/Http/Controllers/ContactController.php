<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
         $data['setting'] = Setting::select('email','phone')->first();
         return view('web.contact.index')->with($data);
    }
    public function send(Request $request){
        
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|max:255',
            'subject'=>'required|string|max:255',
            'body'=>'required|string',
        ]);
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'body'=>$request->body,
        ]);


        $request->session()->flash('success','your message send successfully');
        return redirect(route('contact.create'));
    }

}
