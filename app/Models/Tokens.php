<?php

namespace App\Models;

use CodeIgniter\Model;

class Tokens extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tokens';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username','token'];

}
