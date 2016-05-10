<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
    	return redirect()->route('home.index');
    }

    public function kick($alert = "")
    {
    	return view('layouts.kick', compact('alert'));
    }
}
