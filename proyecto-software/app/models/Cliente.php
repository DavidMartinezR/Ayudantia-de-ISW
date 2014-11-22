<?php
class Cliente extends Eloquent 
{
	protected $table = 'cliente';
	public $timestamps=false;	

	public function	mascota()
	{
		return $this->hasMany('mascota');		
	}

	public function	cita()
	{
		return $this->hasMany('cita');		
	}

	public function	cliente()
	{
		return $this->hasMany('cliente');		
	}

	public function	usuario()
	{
		return $this->belongsTo('usuario');		
	}
}