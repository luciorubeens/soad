<?php

class Avaliacao extends Eloquent
{
	protected $table = "avaliacao";
	protected $fillable = array('*');
	public $timestamps = true;

	public function turma()
	{
		return $this->belongsTo('Turma');
	}

	public function perguntas()
	{
		return $this->hasMany('PerguntaCadastrada');
	}
}