<?php
class Usuario extends Eloquent 
{
	protected $table = 'usuario';
	public $timestamps=false;
	
	public function	rol()
	{
		return $this->hasOne('rol');		
	}

	public function	cliente()
	{
		return $this->hasMany('cliente');		
	}

	public function	mascota()
	{
		return $this->hasMany('mascota');		
	}

	public function	cita()
	{
		return $this->hasMany('cita');		
	}
}