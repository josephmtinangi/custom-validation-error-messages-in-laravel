<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm()
    {
    	return view('contact');
    }

    public function contact(Request $request)
    {
    	$rules = [
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required|min:5',
    	];

			$customMessages = [
			    'name.required' => 'Yo, what should I call you?',
			    'email.required' => 'We need your email address also',
			    'message.required'  => 'c\'mon, you want to contact me without saying anything?',
			 ];

    	$this->validate($request, $rules, $customMessages);

    	return back()->with('status', 'Your message has been received, We will get back to you shortly.');
    }
}
