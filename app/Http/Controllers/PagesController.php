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
    	$host_name = $_SERVER['HTTP_HOST']; 				// localhost:8000
    	$app_id = "611579029008726";						// ID app facebok
	    $app_secret = "19807f794df8631d766e848ddd17d4cb";	// Mat khau app facebook
	    $redirect_uri = urlencode("http://$host_name/facebook/getcode");		// Route fb se tra ve kem code

	    // Url gui cho fb de lay code neu chua co
	    $url_init = 'http://www.facebook.com/dialog/oauth?client_id='.$app_id.'&redirect_uri='.$redirect_uri;

    	if($request->input('code') == null) {
    		return redirect($url_init);
    	} else $code = $request->input('code');

    	// Get access token info
	    $facebook_access_token_uri = 
	    "https://graph.facebook.com/oauth/access_token?".
	    "client_id=$app_id".
	    "&redirect_uri=$redirect_uri".
	    "&client_secret=$app_secret".
	    "&code=$code";

	    // Lay response tu link $facebook_access_token_uri tra ve
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	    $response = curl_exec($ch);
	    curl_close($ch);

	    // Tach' lay access token
	    $access_token = str_replace('access_token=', '', explode("&", $response)[0]);

	    // Get user infomation
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me?&access_token=$access_token");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);

		$user = json_decode($response);

		list($fisrtName) = explode(" ", $user->name);  // explode, khong phai split nhu trong js

		// Them vao users neu chua ton tai
		$users = User::all();
		$exist = false;
		foreach ($users as $u) {
			if($u->fb_id == $user->id) $exist = true;
		}

		if(!$exist) {
			User::create([
			'name'		=> $fisrtName,
			'fb_id'		=> $user->id,
			'email'		=> $user->id.'@facebook.com',
			'password'	=> '$2y$10$3qusz1/Sf4d/E5BTh9pGBefLy6pOYhOqewnuHJZSbJQg/YGqVutba', // shovity123
			]);
		}

		Auth::attempt(['email' => $user->id.'@facebook.com', 'password' => 'shovity123'], true);
		return redirect()->route('home.index');
    }
}