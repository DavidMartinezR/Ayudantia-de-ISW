<?php
class Mascota extends Eloquent 
{
	protected $table = 'mascota';
	public $timestamps=false;	

	public function	cita()
	{
		return $this->hasMany('cita');		
	}

	public function	usuario()
	{
		return $this->belongsTo('usuario');		
	}

	public function	cliente()
	{
		return $this->belongsTo('cliente');		
	}
}