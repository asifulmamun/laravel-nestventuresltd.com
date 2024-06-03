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

    public function return_refund(){
        
        return view('frontend.return_refund');
    }

    public function terms_condition(){
        
        return view('frontend.terms_condition');
    }


}
