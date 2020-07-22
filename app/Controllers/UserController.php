<?php namespace App\Controllers;
use App\Models\UserModel;
class UserController extends BaseController{
    public function index(){
        //instanciar un objeto
        $userModel = new UserModel();
        //realizar c0nsulta a la base de datos.
        $users=$userModel->findAll();
        //Enviar resultado a la vista
        //var_dump($users);
        $data['users']=$users;
        $data['title']='Lista de Usuarios';

        return view('users/listar_view',$data);
    }
    public function saveAction($nombre, $sueldo)
    {
        $userModel = new UserModel();
        
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
    public function consultaSqlAction(){
        //1 instanciar un objeto de conexion
       $userModel = new UserModel();
        $users= $userModel->obtenerUsuariosSql();
        var_dump($users);
    }
    public function newAction(){
        helper('form');
        $data['title']='Nuevo Usuario';
        return view('users/nuevo_view',$data);
    }
    public function createAction(){
        $userModel = new UserModel();
        $request =  \Config\Services::request();
        $user=$request->getPostGet();
        $user['password']=MD5($request->getPostGet('password'));
        $userModel->insert($user); 
        echo 'El usuario fue registrado';
        
    }


}
?>