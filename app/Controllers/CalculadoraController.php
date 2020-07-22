<?php namespace App\Controllers;
use App\Libraries\Rectangulo;
class CalculadoraController extends BaseController{
    public function index(){

    }
    public function aritmeticaAction($valora,$valorb)
    {
        helper('calculadora');
        $data['valora']= $valora;
        $data['valorb']= $valorb;
        return view('calculadora/helper_view',$data);
    }
    public function geometriaAction($valora,$valorb)
    {
        $rectangulo  = new Rectangulo();
        $rectangulo->setBase($valora);
        $rectangulo->setAltura($valorb);
        
        $data['base']=   $rectangulo->getBase();
        $data['altura']= $rectangulo->getAltura();

        $data['area']= $rectangulo->getArea();
        $data['perimetro']= $rectangulo->getPerimetro();

        return view('calculadora/lib_view',$data);
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
    //Tarea 3
    public function t3aritmeticaAction($valora,$valorb)
    {
        helper('calculadora');
        $data['valora']= $valora;
        $data['valorb']= $valorb;
        return view('calculadora/t3_aritmetica_view',$data);
    }
    public function t3rectanguloAction($base,$altura)
    {
        helper('calculadora');
        $data['base']= $base;
        $data['altura']= $altura;
        return view('calculadora/t3_rectangulo_view',$data);
    }
    public function t3circuloAction($radio)
    {
        helper('calculadora');
        $data['radio']= $radio;
        
        return view('calculadora/t3_circulo_view',$data);
    }
}
?>