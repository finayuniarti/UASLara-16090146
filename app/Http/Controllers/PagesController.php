<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request;

class PagesController extends Controller
{
     public function homepage()
    {
    	return view('pages.homepage');
    }

    public function adminhome(){
      return view('sadmin.dashboard');
    }

    public function __construct()
    {
        $this->middleware('auth', ['except' =>['homepage']]);
    }
}
