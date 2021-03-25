<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $allowedFields = ['namabarang', 'nomorsuratjalan', 'supplier_id','kondisibarang', 'jumlahterima','hargabarang', 'tanggalterima'];
    protected $useTimestamps = true;
}