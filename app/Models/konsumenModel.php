<?php

namespace App\Models;

use CodeIgniter\Model;

class KonsumenModel extends Model
{
    protected $table      = 'konsumen';
    protected $allowedFields = ['namakonsumen', 'alamatkonsumen', 'nomorhandphone'];
    protected $useTimestamps = true;
}