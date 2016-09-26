<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class PagesController extends Controller
{
    public function index()
    {
    	return view('home');
    }

    public function kick($alert = "")
    {
    	return view('layouts.kick', compact('alert'));
    }

    public function getCodeFb(Request $request)
    {
    	
	    return $response = file_get_contents("http://shovity.esy.es");
	    
		
    }
}