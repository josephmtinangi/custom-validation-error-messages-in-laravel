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

    	$this->validate($request, $rules);

    	return back()->with('status', 'Your message has been received, We will get back to you shortly.');
    }
}
