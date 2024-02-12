<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DaftarPemesananModel;
use App\Models\DataDriverModel;
use App\Models\DataKendaraanModel;

class DaftarPemesananController extends BaseController
{
    protected $daftarpemesananModel;
    protected $datadriverModel;
    protected $datakendaraanModel;
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
        // return view('/datadriver_superadmin', $data);
    }

    public function index2()
    {
        $data['tamu'] = $this->datadriverModel->getTamu();
        return view('/datadriver_admin', $data);
    }

    public function index3()
    {
        $data['tamu'] = $this->datadriverModel->getTamu();
        return view('/datadriver_adminhumas', $data);
    }

    public function cetak()
    {
        $data['tamu'] = $this->model->getTamu();
        return view('/cetakdatatamu_admin', $data);
    }

    public function cetak2()
    {
        $data['tamu'] = $this->tamuModel->getTamu();
        return view('/cetakdatatamu_superadmin', $data);
    }

    public function create()
    {
        $data['driver'] = $this->datadriverModel->getDriver();
        $data['kendaraan'] = $this->datakendaraanModel->getKendaraan();
        return view('/formdaftarpemesanan_superadmin', $data,$data);
    }
    
    public function store()
    {
        try {
            $data = [
                'nama_driver' => $this->request->getPost('nama_driver'),
                'nomor_polisi' => $this->request->getPost('nomor_polisi'),
                'tanggal_berangkat' => $this->request->getPost('tanggal_berangkat'),
                'tanggal_kedatangan' => $this->request->getPost('tanggal_kedatangan'),
                'asal' => $this->request->getPost('asal'),
                'tujuan' => $this->request->getPost('tujuan'),
                'keperluan' => $this->request->getPost('keperluan'),
                'status' => $this->request->getPost('status'),
            ];

            $this->daftarpemesananModel->savePemesanan($data);

            return redirect()->to(base_url('/datadriver_superadmin'));
        } catch (\Throwable $th) {
            log_message('error', 'Error in storing driver: ' . $th->getMessage());
            return redirect()->to(base_url('/'))->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }


    public function edit($id)
    {
        $data['driver'] = $this->datadriverModel->getDriver();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->findPemesanan($id);
        $data['kendaraan'] = $this->datakendaraanModel->getKendaraan();
        return view('/formeditdaftarpemesanan_superadmin', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_driver' => $this->request->getPost('nama_driver'),
            'nomor_polisi' => $this->request->getPost('nomor_polisi'),
            'tanggal_berangkat' => $this->request->getPost('tanggal_berangkat'),
            'tanggal_kedatangan' => $this->request->getPost('tanggal_kedatangan'),
            'asal' => $this->request->getPost('asal'),
            'tujuan' => $this->request->getPost('tujuan'),
            'keperluan' => $this->request->getPost('keperluan'),
            'status' => $this->request->getPost('status'),
        ];

        $this->daftarpemesananModel->updatePemesanan($id, $data);

        return redirect()->to(base_url('/datadriver_superadmin'));
    }


    public function delete($id)
    {
        $this->daftarpemesananModel->deletePemesanan($id);

        return redirect()->to(base_url('/datadriver_superadmin'));
    }
}
