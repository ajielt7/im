<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table      = 'supplier';
    protected $allowedFields = ['namasupplier', 'alamatsupplier', 'notelp'];
    protected $useTimestamps = true;

    public function getDataAutocomplete($autocomplete)
    {
        $this->like('namasupplier', $autocomplete);
        $this->limit(5);
        return $this->get()->getResultArray();
    }
}