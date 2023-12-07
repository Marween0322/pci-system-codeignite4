<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    // ...
    protected $table            = 'tblbooks';//
    protected $primaryKey       = 'id';//
    protected $useAutoIncrement = true;//
    protected $returnType       = 'array';//
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title','author','year'];
}