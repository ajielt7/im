<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table      = 'supplier';
    protected $allowedFields = ['barang_id', 'konsumen_id'];
    protected $useTimestamps = true;
}