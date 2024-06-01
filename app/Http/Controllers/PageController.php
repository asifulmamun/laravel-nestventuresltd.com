<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        
        return view('frontend.about');
    }
    
    
    public function privacy_policy(){
        
        return view('frontend.privacy_policy');
    }
}
