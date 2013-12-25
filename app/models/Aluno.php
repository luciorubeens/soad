<?php

class Aluno extends Eloquent
{
	protected $table = 'aluno';
	protected $fillable = array('*');
	public $timestamps = false;

	public function turma()
	{
		return $this->belongsTo('Turma');
	}
}