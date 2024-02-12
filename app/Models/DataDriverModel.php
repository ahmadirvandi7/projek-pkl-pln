<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDriverModel extends Model
{
    protected $table            = 'driver';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','nama_driver'];

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

    public function getDriver()
    {
        return $this->findAll();
    }

    public function saveDriver($data)
    {
        $this->insert($data);
    }

    public function findDriver($id)
    {
        return $this->find($id);
    }

    public function updateDriver($id, $data)
    {
        $this->update($id, $data);
    }

    public function deleteDriver($id)
    {
        $this->delete($id);
    }
}
