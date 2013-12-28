<?php 

class CoordenadorController extends BaseController
{
	private $id;

	public function __construct()
	{
		$coordenador = Coordenador::where('email','=',Auth::user()->username)->get()[0]; // captura as informações do professor

		// remove o sobrenome
		$nome_split = explode(" ",$coordenador->nome);
		$coordenador->nome = $nome_split[0] ." ". $nome_split[1];

		Session::put("user", $coordenador); // armazena na sessão

		$this->id = Session::get('user')->id;
	}

	public function getIndex()
	{
		return Redirect::to('coordenador/dashboard');
		
	}

	public function getDashboard()
	{
		return View::make('coordenador.dashboard')->with("pagina", "Dashboard");
	}

	public function getAvaliacao()
	{
		$data = array(
			"pagina"=>"Avaliações",
			"cursos"=>Coordenador::find($this->id)->cursos
		);
		return View::make('coordenador.avaliacao',$data);
	}

	public function getCurso()
	{
		return Coordenador::find($this->id)->cursos;
	}
}