<?php

class Turma extends Eloquent 
{
	protected $table = "turma";
	public $timestamps = false;
	protected $fillable = array('*');

	public function curso()
	{
		return $this->belongsTo('Curso');
	}

	public function alunos()
	{
		return $this->hasMany('Aluno');
	}

	public function avaliacoes()
	{
		return $this->hasMany('Avaliacao');
	}

}