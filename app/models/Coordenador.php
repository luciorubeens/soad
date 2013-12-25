<?php

class Coordenador extends Eloquent
{
	protected $table = 'coordenador';
	public $timestamps = false;
	protected $fillable = array('*');

	public function cursos()
	{
		return $this->hasMany('Curso');
	}
}