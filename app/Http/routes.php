<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as'	=> 'home',
	'uses'	=> 'PagesController@index'
	]);

Route::get('/articles', [
	'as'	=> 'article.index',
	'uses'	=> 'ArticlesController@index'
	]);


Route::get('/articles/create', [
	'as'	=> 'article.create',
	'uses'	=> 'ArticlesController@create'
	]);

Route::post('/articles', [
	'as'	=> 'article.store',
	'uses'	=> 'ArticlesController@store'
	]);

Route::get('/articles/{id}', [
	'as'	=> 'article.show',
	'uses'	=> 'ArticlesController@show'
	])->where(['id' => '[0-9]+']);

Route::get('/articles/{id}/edit', [
	'as'	=> 'article.edit',
	'uses'	=>	'ArticlesController@edit'
	])->where(['id' => '[0-9]+']);


Route::put('/articles/{id}/update', [
	'as'	=> 'article.update',
	'uses'	=>	'ArticlesController@update'
	])->where(['id' => '[0-9]+']);

Route::delete('/articles/{id}/delete', [
	'as'	=> 'article.destroy',
	'uses'	=> 'ArticlesController@destroy'
	]);
Route::get('/games', [
	'as'	=> 'games.index',
	'uses'	=> 'GamesController@index'
	]);

// Anime

Route::get('/animes', [
	'as'	=> 'anime.index',
	'uses'	=> 'AnimesController@index'
	]);

Route::auth();

Route::get('/home', [
	'as'	=> 'home.index',
	'uses'	=> 'HomeController@index'
	]);

// Master area
Route::group(['prefix' => 'master', 'middleware' => 'master'], function ()
{
	Route::get('/', [
	'as'	=> 'master.index',
	'uses'	=> 'MasterController@index'
	]);

	Route::get('/{idUser}/remove', [
		'as'	=> 'user.remove',
		'uses'	=>	'MasterController@userRemove'
		]);

	Route::get('/{idUser}/edit', [
		'as'	=> 'user.edit.form',
		'uses'	=> 'MasterController@userEditForm']);

	Route::put('/{idUser}/edit', [
		'as'	=> 'user.edit',
		'uses'	=> 'MasterController@userEdit']);
});

Route::get('profile', ['middleware' => 'auth.basic', function() {
	// Neu chua dang nhap yeu cau nhap mat khau bang cua so bat len
    return "ok";
}]);

Route::get('kick/{alert?}', [
	'as'	=> 'kick',
	'uses'	=> 'PagesController@kick'
	]);

