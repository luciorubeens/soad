<?php

class UserController extends BaseController
{
	public function __construct() {
	   $this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	public function getIndex()
	{
		return View::make('login');
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('user');
	}

	public function postSignin()
	{
		$userdata = array(
			'username'=>Input::get('email'),
			'password'=>Input::get('nascimento')
		);


		if (Auth::attempt($userdata)) {
			$email = Auth::user()->username;
			$tipo = Auth::user()->tipo;
			
			if ($tipo==0) { // aluno
		   		return Redirect::to('aluno');
			} else if ($tipo==1) { // professor
				return Redirect::to('professor');
			} else if ($tipo==2) {
				return Redirect::to('coordenador');
			}

		} else {
		   return Redirect::to('user')
		      ->with('message', 'Your username/password combination was incorrect')
		      ->withInput();
		}
	}
}