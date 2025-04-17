<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("frontend.index");
    }

    // ABOUT
    public function about(){
        return view("frontend.about");
    }
    // CONTACT
    public function contact(){
        return view("frontend.contact");
    }

    // SHOP 
    public function category(){
        return view("frontend.category");
    }
}
