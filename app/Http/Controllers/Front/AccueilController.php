<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccueilController extends Controller
{
    // page accueil
    public function index(){
        $page_name = "Accueil";
        return view('front.pages.index', compact('page_name'));
    }

    // page activitees
    public function activitees(){
        $page_name = "Activitées";
        return view('front.pages.activitees', compact('page_name'));
    }

    // page a propos
    public function about(){
        $page_name = "A propos";
        return view('front.pages.about', compact('page_name'));
    }
}
