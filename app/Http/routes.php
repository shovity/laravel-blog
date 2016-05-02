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

Route::get('articles', [
	'as'	=> 'article.index',
	'uses'	=> 'ArticlesController@index'
	]);


Route::get('articles/create', [
	'as'	=> 'article.create',
	'uses'	=> 'ArticlesController@create'
	]);

Route::post('articles', [
	'as'	=> 'article.store',
	'uses'	=> 'ArticlesController@store'
	]);

Route::get('articles/{id}', [
	'as'	=> 'article.show',
	'uses'	=> 'ArticlesController@show'
	])->where(['id' => '[0-9]+']);

Route::get('articles/{id}/edit', [
	'as'	=> 'article.edit',
	'uses'	=>	'ArticlesController@edit'
	])->where(['id' => '[0-9]+']);


Route::put('articles/{id}/update', [
	'as'	=> 'article.update',
	'uses'	=>	'ArticlesController@update'
	])->where(['id' => '[0-9]+']);

Route::delete('articles/{id}/delete', [
	'as'	=> 'article.destroy',
	'uses'	=> 'ArticlesController@destroy'
	]);

// Anime

Route::get('animes', [
	'as'	=> 'anime.index',
	'uses'	=> 'AnimesController@index'
	]);