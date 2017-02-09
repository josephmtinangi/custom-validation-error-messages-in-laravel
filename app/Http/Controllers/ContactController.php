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
    	dd($request->all());
    }
}
