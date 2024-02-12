<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DataKendaraanModel;

class DataKendaraanController extends BaseController
{
    protected $datakendaraanModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->datakendaraanModel = new DataKendaraanModel();
    }

    public function index()
    {
        $data['kendaraan'] = $this->datakendaraanModel->getKendaraan();
        // return view('/datadriver_superadmin', $data);
    }

    public function index2()
    {
        $data['kendaraan'] = $this->datadriverModel->getTamu();
        return view('/datadriver_admin', $data);
    }

    public function index3()
    {
        $data['kendaraan'] = $this->datadriverModel->getTamu();
        return view('/datadriver_adminhumas', $data);
    }

    public function cetak()
    {
        $data['tamu'] = $this->tamuModel->getTamu();
        return view('/cetakdatatamu_admin', $data);
    }

    public function cetak2()
    {
        $data['tamu'] = $this->tamuModel->getTamu();
        return view('/cetakdatatamu_superadmin', $data);
    }

    public function create()
    {
        return view('/formtambahkendaraan_superadmin');
    }

    public function store()
    {
        try {
            $data = [
                'nopol_kendaraan' => $this->request->getPost('nopol_kendaraan'),
                'merk' => $this->request->getPost('merk'),
            ];

            $this->datakendaraanModel->saveKendaraan($data);

            return redirect()->to(base_url('/datadriver_superadmin'));
        } catch (\Throwable $th) {
            log_message('error', 'Error in storing driver: ' . $th->getMessage());
            return redirect()->to(base_url('/'))->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }


    public function edit($id)
    {
        $data['kendaraan'] = $this->datakendaraanModel->findKendaraan($id);
        return view('/formeditkendaraan_superadmin', $data);
    }

    public function update($id)
    {
        $data = [
            'nopol_kendaraan' => $this->request->getPost('nopol_kendaraan'),
            'merk' => $this->request->getPost('merk'),
        ];

        $this->datakendaraanModel->updateKendaraan($id, $data);

        return redirect()->to(base_url('/datadriver_superadmin'));
    }


    public function delete($id)
    {
        $this->datakendaraanModel->deleteKendaraan($id);

        return redirect()->to(base_url('/datadriver_superadmin'));
    }
}
