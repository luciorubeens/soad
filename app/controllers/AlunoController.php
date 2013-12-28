<?php

class AlunoController extends BaseController
{
	private $id;

	public function __construct()
	{
		$aluno = Aluno::where('email','=',Auth::user()->username)->get()[0]; // captura as informações do aluno

		Session::put("user", $aluno); // armazena na sessão

		// remove o sobrenome
		$nome_split = explode(" ",$aluno->nome);
		$aluno->nome = $nome_split[0] ." ". $nome_split[1];

		$this->id = Session::get('user')->id;
	}

	public function getIndex()
	{
		return Redirect::to('aluno/dashboard');
	}

	public function getDashboard()
	{
		$data = array(
			"professores"=>$this->getProfessores(),
			"pagina"=>"Dashboard"
		);
		return View::make('aluno.dashboard',$data);
	}

	// retorna todos os professores que ministram aulam na mesma turma do aluno
	public function getProfessores()
	{
		$consulta = DB::table('professor')
		 	->join('grupo',function($join) {
		 		$join->on('professor.id','=','grupo.professor_id')
		 			->where('grupo.turma_id','=',Aluno::find($this->id)->turma->id);
		 	})
		 	->select('professor.nome')
		 	->get();

		return $consulta;
	}
}