<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Show all listings
    public function index() {

        return view('index', [
        ]
    );
        
    }
    
}
