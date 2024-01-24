<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalRapatModel extends Model
{
    protected $table            = 'jadwal_rapat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal','mulai','selesai','agenda','ruangan','bidang','jumlah_peserta','status_ruangan'];

    // Dates
    protected $useTimestamps = true;
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

    public function getJadwalRapat()
    {
        return $this->findAll();
    }

    public function saveJadwalRapat($data)
    {
        $this->insert($data);
    }

    public function findJadwalRapat($id)
    {
        return $this->find($id);
    }

    public function updateJadwalRapat($id, $data)
    {
        $this->update($id, $data);
    }

    public function deleteJadwalRapat($id)
    {
        $this->delete($id);
    }
}
