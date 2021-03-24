<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table      = 'supplier';
    protected $allowedFields = ['namasupplier', 'alamatsupplier', 'nomortelepon'];
    protected $useTimestamps = true;
}