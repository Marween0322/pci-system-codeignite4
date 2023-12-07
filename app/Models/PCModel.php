<?php

namespace App\Models;

use CodeIgniter\Model;

class PCModel extends Model
{
    protected $table            = 'tblpcs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['brand', 'model', 'year', 'processor', 'memory', 'storage', 'graphics_card'];
}
