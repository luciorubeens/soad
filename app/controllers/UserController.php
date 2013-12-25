<?php

class UserController extends BaseController
{
	public function __construct() {
	   //$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	public function getIndex()
	{
		return View::make('login');
	}

	public function getDashboard()
	{
		return "oie";
	}

	public function postSignin()
	{
		$userdata = array(
			'username'=>Input::get('email'),
			'password'=>Input::get('nascimento')
		);


		if (Auth::attempt($userdata)) {
		   return Redirect::to('user/dashboard')->with('message', 'You are now logged in!');
		} else {
		   return Redirect::to('user/index')
		      ->with('message', 'Your username/password combination was incorrect')
		      ->withInput();
		}
	}
}