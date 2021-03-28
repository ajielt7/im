<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table      = 'supplier';
    protected $allowedFields = ['id', 'namasupplier', 'alamatsupplier', 'notelp'];
    protected $useTimestamps = true;
}