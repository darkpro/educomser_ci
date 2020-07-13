<?php namespace App\Controllers;
class Practica2Controller extends BaseController{
    public function index(){

    }
    public function misdatosAction()
    {
        $data['nombre']= "Alan";
        $data['app']= "Corini";
        $data['email']= "alroc809@gmail.com";
        $data['telefono']= "77258010";

        return view('practica2/datos_view',$data);
    }
    public function tablamultiplicarAction($numero)
    {
        $data['num']=$numero;

        return view('practica2/lst_tabla_multiplicar_view',$data);
    }
    public function matrizAction($numero)
    {
        $data['num']=$numero;

        return view('practica2/lst_matriz_view',$data);
    }

    
    public function listardatosproductosAction()
    {
        $lista =  array(
            array('id'=>1, 'prod'=>'ARROZ', 'cant'=> rand ( 0 ,100 ), 'precio'=> mt_rand (0*10, 99*10) / 10,'fecha'=>date(DATE_RFC2822)),
            array('id'=>2, 'prod'=>'FIDEO', 'cant'=> rand ( 0 ,100 ), 'precio'=> mt_rand (0*10, 99*10) / 10,'fecha'=>date(DATE_RFC2822)),
            array('id'=>3, 'prod'=>'CHOCOLATE', 'cant'=> rand ( 0 ,100 ), 'precio'=> mt_rand (0*10, 99*10) / 10,'fecha'=>date(DATE_RFC2822)),
            array('id'=>4, 'prod'=>'AZUCAR', 'cant'=> rand ( 0 ,100 ), 'precio'=> mt_rand (0*10, 99*10) / 10,'fecha'=>date(DATE_RFC2822)),
            array('id'=>5, 'prod'=>'CAFE', 'cant'=> rand ( 0 ,100 ), 'precio'=> mt_rand (0*10, 99*10) / 10,'fecha'=>date(DATE_RFC2822)),
        );
        $data['productos']= $lista;
        return view('practica2/lst_productos_view',$data);
    }



}
?>