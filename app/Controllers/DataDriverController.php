<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DataDriverModel;
use App\Models\DataKendaraanModel;
use App\Models\DaftarPemesananModel;

class DataDriverController extends BaseController
{
    protected $datadriverModel;
    protected $datakendaraanModel;
    protected $daftarpemesananModel;

    protected $helpers = ['form'];

    public function __construct()
    {
        $this->daftarpemesananModel = new DaftarPemesananModel();
        $this->datadriverModel = new DataDriverModel();
        $this->datakendaraanModel = new DataKendaraanModel();
    }

    public function index()
    {
        $data['driver'] = $this->datadriverModel->getDriver();
        $data['kendaraan'] = $this->datakendaraanModel->getKendaraan();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->getPemesanan();
        return view('/datadriver_superadmin', $data);
    }

    public function index2()
    {
        $data['driver'] = $this->datadriverModel->getDriver();
        $data['kendaraan'] = $this->datakendaraanModel->getKendaraan();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->getPemesanan();
        return view('/datadriver_admin', $data);
    }
    public function indexhumas()
    {
        $data['driver'] = $this->datadriverModel->getDriver();
        $data['kendaraan'] = $this->datakendaraanModel->getKendaraan();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->getPemesanan();
        return view('/datadriver_adminhumas', $data);
    }

    public function cetak()
    {
        $data['driver'] = $this->datadriverModel->getDriver();
        $data['kendaraan'] = $this->datakendaraanModel->getKendaraan();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->getPemesanan();
        return view('/cetakdaftarpemesanan_superadmin', $data);
    }

    public function create()
    {
        return view('/formtambahdriver_superadmin');
    }
    
    public function store()
    {
        try {
            $data = [
                'nama_driver' => $this->request->getPost('nama_driver'),
            ];

            $this->datadriverModel->saveDriver($data);

            return redirect()->to(base_url('/datadriver_superadmin'));
        } catch (\Throwable $th) {
            log_message('error', 'Error in storing driver: ' . $th->getMessage());
            return redirect()->to(base_url('/'))->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }


    public function edit($id)
    {
        $data['driver'] = $this->datadriverModel->findDriver($id);
        return view('/formeditdriver_superadmin', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_driver' => $this->request->getPost('nama_driver'),
        ];

        $this->datadriverModel->updateDriver($id, $data);

        return redirect()->to(base_url('/datadriver_superadmin'));
    }

    public function delete($id)
    {
        $this->datadriverModel->deleteDriver($id);

        return redirect()->to(base_url('/datadriver_superadmin'));
    }
}
