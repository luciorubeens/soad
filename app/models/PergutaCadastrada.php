<?php

class PerguntaCadastrada extends Eloquent
{
	protected $table = "perguntacadastrada";
	protected $fillable = array("*");
	public $timestamps = false;

	public function avaliacao()
	{
		return $this->belongsTo('Avaliacao');
	}

}