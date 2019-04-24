<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormData;

use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
    	return view('layouts.admin');
    }
    public function store(ContactFormData $request)
    {
    	$formData = new Contact;
    	$formData->name = $request->name;
    	$formData->email = $request->email;
    	$formData->phone = $request->phone;
    	$formData->msg = $request->msg;
    	$formData->save();

    	return redirect()->back()->with('message', 'Thank You For Writing us.');
    }
}
