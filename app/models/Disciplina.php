<?php

class Disciplina extends Eloquent
{
	protected $table = "disciplina";
	protected $fillable = array('*');
	public $timestamps = false;

	public function curso()
	{
		return $this->belongsTo('Curso');
	}
}