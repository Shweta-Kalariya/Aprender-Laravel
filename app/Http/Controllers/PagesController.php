<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    
    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = [
            'title' => "Welcome to Services",
            'services' => ['Web Development', "Mobile Development", "Database Migration"]
        ];
        return view('pages.services')->with($data);
    }
}