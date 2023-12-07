<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    // ...
    protected $table            = 'tblstudent';//
    protected $primaryKey       = 'id';//
    protected $useAutoIncrement = true;//
    protected $returnType       = 'array';//
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','fullName','program','yearLevel'];
}