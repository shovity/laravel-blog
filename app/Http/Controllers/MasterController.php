<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class MasterController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return view('master.index', compact('users'));
    }

    public function userRemove($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->route('master.index');
    }

    public function userEditForm($id)
    {
    	$user = User::find($id);
    	return view('master.editUser', compact('user'));
    }

    public function userEdit($id, Request $request)
    {
    	$user = User::find($id);
    	$user->update([
    			'id'			=> $request->id,
    			'name'			=> $request->name,
    			'email'			=> $request->email,
    			'created_at'	=> $request->created_at,
    			'lvl'			=> $request->lvl
    		]);
    	return redirect()->route('master.index');
    }
}