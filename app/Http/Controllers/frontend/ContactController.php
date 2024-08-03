<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Jobs\ContactUsJob;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
public function contact(){
    return view("frontend.contact");
}
public function sendContactMail(Request $request){
             $validatedData=$request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'subject' =>'required|string',
                'message' => 'required|string'
             ]);
             $mailData=[
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message
             ];
                // dispatch(new ContactUsJob($mailData));
             Mail::to('ashabbar411@gmail.com')->send(new ContactUs($mailData));
             return redirect()->back();
}
}
