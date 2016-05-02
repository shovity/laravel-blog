<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AnimesController extends Controller
{
    public function index()
    {
    	// Logic html here
    	return view('animes.index');
    }
}
