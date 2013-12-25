<?php

class Pergunta extends Eloquent
{
	protected $table = "pergunta";
	protected $fillable = array("*");
	public $timestamps = false;

	public function coordenador()
	{
		return $this->belongsTo('Coordenador');
	}
}