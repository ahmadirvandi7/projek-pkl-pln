<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarPemesananModel extends Model
{
    protected $table            = 'daftar_pemesanan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_driver','nomor_polisi','tanggal_berangkat','tanggal_kedatangan','asal','tujuan','keperluan','status'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getPemesanan()
    {
        return $this->findAll();
    }

    public function savePemesanan($data)
    {
        $this->insert($data);
    }

    public function findPemesanan($id)
    {
        return $this->find($id);
    }

    public function updatePemesanan($id, $data)
    {
        $this->update($id, $data);
    }

    public function deletePemesanan($id)
    {
        $this->delete($id);
    }
}
