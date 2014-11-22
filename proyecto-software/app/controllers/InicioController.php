<?php

class InicioController extends BaseController 
{
    protected $layout = 'layouts.master';
    
    public function getIndex()
    {
        return $this->layout->content = View::make('ini.index');
    }
    public function getLoggin()
    {
    	return $this->layout->content = View::make('ini.loggin');    	
    }
    public function getQuienessomos()
    {
    	return $this->layout->content = View::make('ini.quienessomos');    	
    }
    public function getQuehacemos()
    {
    	return $this->layout->content = View::make('ini.quehacemos');    	
    }
    public function getAdministrador()
    {
    	return $this->layout->content = View::make('ini.administrador');    	
    }
    public function getComun()
    {
    	return $this->layout->content = View::make('ini.comun');    	
    }
    public function getContacto()
    {
        return $this->layout->content = View::make('ini.contacto');        
    }
    public function getServicios()
    {
        return $this->layout->content = View::make('ini.servicios');        
    }
}

