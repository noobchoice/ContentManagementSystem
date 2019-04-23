<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller{

    public function index(){
    	return view('frontend.home');
    }

    public function teacher()
    {
        return view('frontend.teacher');
    }

    public function about_us()
    {
        return view('frontend.about');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function contact_us()
    {
        return view('frontend.contact');
    }

    // Validation Rules For Contact Form...
    
}

