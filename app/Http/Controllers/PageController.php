<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'WELCOME';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Me';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
       $data = array(
            'title' => 'Services', 
            'services' => ['CREATE POST', 'DELETE POST', ]
       );
        return view('pages.services')->with($data);
    }
}