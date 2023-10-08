<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido','email','nombre_usuario', 'pass','confirmar_pass', 'perfil_id', 'baja', 'created_at'];
}