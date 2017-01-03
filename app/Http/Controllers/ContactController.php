<?php

namespace App\Http\Controllers;


use Mail;
use App\Mail\ContactMail;
use Session;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('contact.contact');
        
    }
    
    
    
    public function mailTo(ContactRequest $request)
    {
        Mail::to('duschewen.contact@gmail.com')
                                            
                                            ->send(new ContactMail(
                    $request->input('name'),
                    $request->input('email'),
                    $request->input('needs'),
                    $request->input('message')
            ));
            
            
        
       
        
        return redirect('/')
                                ->with('status', 'Your email was prefectly sent !')
                                ->with('name', $request->input('name'));
    }
    
}
