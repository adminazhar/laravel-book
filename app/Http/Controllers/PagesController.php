<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to HomePage";
        // return view('pages/index', compact('title'));
        return view('pages/index')->with('title', $title);
    }
    public function about(){
        return view('pages/about');
    }
    public function services(){
        return view('pages/services');
    }
    public function contact(){
        return view('pages/contact');
    }
}
