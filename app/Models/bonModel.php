<?php

namespace App\Models;

use CodeIgniter\Model;

class BonModel extends Model
{
    protected $table      = 'bon';
    protected $allowedFields = ['barang_id', 'konsumen_id', 'jumlahkeluarbarang'];
    protected $useTimestamps = true;
}