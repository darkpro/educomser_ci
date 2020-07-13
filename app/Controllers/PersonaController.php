<?php namespace App\Controllers;
class PersonaController extends BaseController{
    public function index(){

    }
    public function liquidoPagableAction($nombre, $sueldo)
    {
        $data['nombre']= $nombre;
        $data['sueldo']= $sueldo;
        $data['descuento']= 500;
        $data['liquido']= $sueldo - 500;

        return view('persona/datos1_view',$data);
    }
    public function listarAction()
    {
        $lista =  array(
            array('id'=>1, 'nombre'=>'Mateo0', 'edad'=> 25),
            array('id'=>2, 'nombre'=>'Mateo1', 'edad'=> 25),
            array('id'=>3, 'nombre'=>'Mateo2', 'edad'=> 25),
            array('id'=>4, 'nombre'=>'Mateo3', 'edad'=> 25),
        );
        $data['personas']= $lista;
        return view('persona/lista_view',$data);
    }



}
?>