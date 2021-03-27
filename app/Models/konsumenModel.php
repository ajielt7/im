<?php

namespace App\Models;

use CodeIgniter\Model;

class KonsumenModel extends Model
{
    protected $table      = 'konsumen';
    protected $allowedFields = ['konsumenid', 'namakonsumen', 'alamatkonsumen', 'nohp'];
    protected $useTimestamps = true;
}