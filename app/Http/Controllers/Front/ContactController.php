<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    // page contact
    public function getContact(){
        $page_name = "Contactez-nous";
        return view('front.pages.contact', compact('page_name'));
    }

    public function postContat(Request $request){
        
    }
}
