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

    public function facebookGetCode(Request $request)
    {
	    $app_id = "611579029008726";
	    $app_secret = "19807f794df8631d766e848ddd17d4cb";
	    $redirect_uri = urlencode("http://localhost:8000/facebook/getcode");

	    // Get code value
    	$code = $request->input('code');		// Lay bien get chen thanh URL

    	// Get access token info
	    $facebook_access_token_uri = "https://graph.facebook.com/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	    $response = curl_exec($ch);
	    curl_close($ch);

	    // Get access token
	    $access_token = str_replace('access_token=', '', explode("&", $response)[0]);

	    // Get user infomation
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me?access_token=$access_token");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		$user = json_decode($response);

		list($fisrtName) = explode(" ", $user->name);  // Khong dung split nhaaaaaaaaaaaaaaaaaaaaaaaaa

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

    public function graph($param, Request $request)
    {
    	$app_id = "611579029008726";
	    $app_secret = "19807f794df8631d766e848ddd17d4cb";
	    $redirect_uri = urlencode("http://localhost:8000/graph/$param");

    	$url_init = 'http://www.facebook.com/dialog/oauth?client_id='.$app_id.'&redirect_uri='.$redirect_uri;

    	// Create or get token
    	if($request->input('code')) {
    		$code = $request->input('code');
    	} else {
    		return redirect($url_init);
    	}

	    // Get code value
    	// Lay bien get chen thanh URL

    	// Get access token info
	    $facebook_access_token_uri = "https://graph.facebook.com/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	    $response = curl_exec($ch);
	    curl_close($ch);

	    // Get access token
	    $access_token = str_replace('access_token=', '', explode("&", $response)[0]);

	    return redirect('https://graph.facebook.com/'.$param.'?access_token='.$access_token);
    }
}
