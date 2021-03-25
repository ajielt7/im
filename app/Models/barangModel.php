<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $allowedFields = ['namabarang','kodesuratjalan', 'jumlahbarang','hargabarang', 'supplier_id','tanggalpenerimaan'];
    protected $useTimestamps = true;
}