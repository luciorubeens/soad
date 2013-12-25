<?php

class Professor extends Eloquent
{
	protected $table = "professor";
	protected $fillable = array('*');
	public $timestamps = false;
}