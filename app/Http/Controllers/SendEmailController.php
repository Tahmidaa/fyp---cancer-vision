<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\feedback;

class SendEmailController extends Controller
{
   
    function index()
    {
     return view('send_email');
    }

    

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);



        $data = array(
            'email'     => $request->email,
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        $feedback = new Feedback([
            'name' => $request ->get('name'),
            'email' => $request ->get('email'),
            'message' => $request ->get('message'),
        ]);
        $feedback ->save();
        

     Mail::to('web-tutorial@programmer.net')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
   
    

    
}

?>