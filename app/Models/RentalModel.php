<?php

namespace App\Models;

use CodeIgniter\Model;

class RentalModel extends Model
{
    // ...
    protected $table            = 'tblbookrentals';//
    protected $primaryKey       = 'id';//
    protected $useAutoIncrement = true;//
    protected $returnType       = 'array';//
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','sudent_id','book_id','RentalDate','DueDate','Status','Notes','SY'];
}