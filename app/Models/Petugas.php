<?php 
namespace App\Models;

use CodeIgniter\Model;

class Petugas extends Model{
    protected $table      = 'tbpetugas';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id_petugas';
     protected $allowedFields = ['nama_petugas','username','password','telp','level'];
     protected $useAutoIncrement = true;

     //protected $deletedFields = 'deleted_at';
    }