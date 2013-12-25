<?php

class Curso extends Eloquent
{
	protected $table = 'curso';
	public $timestamps = false;
	protected $fillable = array('*');

	public function coordenador()
	{
		return $this->belongsTo('Coordenador');
	}

	public function turmas()
	{
		return $this->hasMany('Turma');
	}

	public function disciplinas()
	{
		return $this->hasMany('Disciplinas');
	}
}