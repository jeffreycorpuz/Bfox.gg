<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index(){
        return view('contact');
    }

    function send(Request $request){
        $this->validate($request, [
            'full_name' => 'required',
            'email' =>'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $details = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
    
        \Mail::to('jeffreysobienacorpuz@gmail.com')->send(new \App\Mail\SendMail($details));

        return back()->with('success','Thanks for contacting us, we will contact you soon');
    }
}
