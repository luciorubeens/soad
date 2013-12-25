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
			$email = Auth::user()->username;
			$tipo = Auth::user()->tipo;
			
			if ($tipo==0) { // aluno
				$aluno = Aluno::where('email','=',Auth::user()->username)->get()[0]; // captura as informações do aluno

				Session::put("user", $aluno); // armazena na sessão

		   		return Redirect::route('aluno');
			} else if ($tipo==1) { // professor
				return Redirect::to('professor/index')->with('email', $email);
			} else if ($tipo==2) {
				return Redirect::to('coordenador/index')->with('email', $email);
			}

		} else {
		   return Redirect::to('user/index')
		      ->with('message', 'Your username/password combination was incorrect')
		      ->withInput();
		}
	}
}