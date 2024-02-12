<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBeritaModel extends Model
{
    protected $table            = 'berita_pln';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kategori','tanggal','media_pemberitaan','judul_pemberitaan','link_pemberitaan'];

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

    public function getBerita()
    {
        return $this->findAll();
    }

    public function saveBerita($data)
    {
        $this->insert($data);
    }

    public function findBerita($id)
    {
        return $this->find($id);
    }

    public function updateBerita($id, $data)
    {
        $this->update($id, $data);
    }

    public function deleteBerita($id)
    {
        $this->delete($id);
    }
}
