<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller('user','UserController');


/*====================================
=            SESSÃO ALUNO            =
====================================*/

Route::group(array('as'=>'aluno', 'prefix' => 'aluno', 'before' => 'auth'), function()
{
	// (redireciona para o dashboard) 
	Route::get('/', function()
	{
		return Redirect::to('aluno/dashboard');
	});

	// página principal - aluno/dashboard - (app/views/aluno/dashboard.blade.php)
	Route::get('dashboard', function()
	{
		return View::make('aluno.dashboard');
	});

});


Route::get('/', 'UserController@getIndex');