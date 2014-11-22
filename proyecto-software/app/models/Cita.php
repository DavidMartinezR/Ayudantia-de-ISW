<?php
class Cita extends Eloquent 
{
	protected $table = 'cita';
	public $timestamps=false;

	public function	usuario()
	{
		return $this->belongsTo('usuario');		
	}

	public function	cliente()
	{
		return $this->belongsTo('cliente');		
	}

		public function	mascota()
	{
		return $this->belongsTo('mascota');		
	}
}