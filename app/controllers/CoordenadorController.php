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

	// Página de visualização de gráficos, icones rápidos.. (coordenador/dashboard)
	public function getDashboard()
	{
		return View::make('coordenador.dashboard')->with("pagina", "Dashboard");
	}

	// Página de criação e visualização das avaliações (coordenador/avaliacao)
	public function getAvaliacao()
	{
		$data = array(
			"pagina"=>"Avaliações",
			"cursos"=>Coordenador::find($this->id)->cursos,
			"avaliacoes"=>$this->getAvaliacoesCriadas()
		);
		return View::make('coordenador.avaliacao',$data);
	}

	/**
	 * cursos ministrados pelo coordenador logado
	 *
	 * @return array
	**/

	private function getCurso()
	{
		return Coordenador::find($this->id)->cursos;
	}

	/**
	 * avaliacoes já criadas pelo coordenador logado
	 *
	 * @return array
	**/

	private function getAvaliacoesCriadas()
	{
		$cursos = $this->getCurso();
		$avaliacoes = array();

		foreach ($cursos as $curso) {
			// percorre as turmas pertencentes ao curso
			foreach ($curso->turmas as $turma) {
				// percorre as avaliacaoes cadastradas para a turma atual
				foreach ($turma->avaliacoes as $avaliacao) {
					$avaliacoes[] = array(
						"curso"=>$curso->curso,
						"turno"=>$turma->turno,
						"modulo"=>$avaliacao->modulo,
						"inicio"=>$avaliacao->inicio,
						"fim"=>$avaliacao->fim,
						"criada"=>\Carbon\Carbon::createFromTimeStamp(strtotime($avaliacao->created_at))->diffForHumans(),
						"status"=>"aberto"
					);
				}
			}
		}

		return $avaliacoes;
	}
}