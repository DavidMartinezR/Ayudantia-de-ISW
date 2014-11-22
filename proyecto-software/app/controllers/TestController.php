<?php

class TestController extends BaseController {

 
    protected $layout = 'layouts.master';
    
    public function getIndex()
    {
        $nombre="César Cancino Zapata";
        return $this->layout->content = View::make('test.index',compact("nombre"));
    }
    public function getHola()
    {
    
        return $this->layout->content = View::make('test.hola');
    }
    public function getNoticias()
    {
        $datos=Noticias::all();
        return $this->layout->content=View::make('test.noticias',compact("datos"));
    }
    public function getDetalle($id=null)
    {
        $datos=Noticias::find($id);
        return $this->layout->content=View::make('test.detalle',compact("datos"));
    }
    public function getSeo($id=null)
    {
        $datos = Noticias::where('seo_slug', '=', $id)->firstOrFail();
        return $this->layout->content=View::make('test.seo',compact("datos"));
    }
    public function getContar()
    {
         $datos= Noticias::count();
         return $this->layout->content=View::make('test.contar',compact("datos"));
    }
    public function get_add()
    {
         return $this->layout->content=View::make('test.add');
    }
     public function post_add()
    {
        //echo "hola desde post";
        $inputs=Input::All();
        //print_r($inputs);
        $reglas=array
        (
            'titulo'=>'required|min:5',
            'contenido'=>'required|min:5'
        );
         $mensajes=array
        (
            "required"=>"este campo es obligatorio",
            "min"=>"debe tener como mínimo 5 caracteres"
        );
        $validar=Validator::make($inputs,$reglas,$mensajes);
        if($validar->fails())
        {
            return Redirect::back()->withErrors($validar);
        }else
        {
            $n=new Noticias();
            $n->titulo=$inputs["titulo"];
            $n->contenido=$inputs["contenido"];
            $n->seo_slug=Helper::con_guion($inputs["titulo"]);
            $n->fecha=date("Y-m-d");
            $n->save();
            Session::flash('mensaje', 'El registro ha sido ingresado exitosamente');
            return Redirect::to('test/add');
        }
    }
    public function getPaginacion()
    {
        $datos=Noticias::paginate(3);
        return $this->layout->content=View::make('test.paginacion',compact("datos"));
    }
}



