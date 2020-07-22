<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    //Tipo de retorno array y object
    //protected $returnType     = 'array';
    protected $returnType     = 'object';
    //Activar eliminar registros logicamente
    protected $useSoftDeletes = true;
    // Indicar campos a manipular
    protected $allowedFields = ['username', 'password','email'];
    //indicar que  los campos para auditoria
    // sean gestionados por codeigniter
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    // Adicionar reglas de validacion a nivel modelo
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    //consulta SQL Nativo
    public function obtenerUsuariosSql(){
        //1 instanciar un objeto de conexion
        $db = \Config\Database::connect();
        // Query
        $sql = 'select id, username,email from users;';
        $query = $db->query($sql);
        $result= $query->getResult();
        return $query;
    }

}