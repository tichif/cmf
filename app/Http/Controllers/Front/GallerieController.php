<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GallerieController extends Controller
{
    public function gallerie(){
        $page_name = "Gallerie";
        return view('front.pages.gallerie', compact('page_name'));
    }
}
