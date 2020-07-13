<?php namespace App\Controllers;
class HolaController extends BaseController{
    public function index(){

    }
    public function datosAction($nombre, $edad)
    {
        //data[]
    }
    public function misdatosAction()
    {
        
        $data['nom']= 'Alan';
        $data['app']= 'Corini';
        return view('datos_view',$data);
    }



}
?>