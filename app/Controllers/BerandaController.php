<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JadwalRapatModel;
use App\Models\DaftarPemesananModel;
use App\Models\TamuModel;
use App\Models\DataBeritaModel;

class BerandaController extends BaseController
{
    protected $jadwalrapatModel;
    protected $daftarpemesananModel;
    protected $tamuModel;
    protected $databeritaModel;

    public function __construct()
    {
        $this->jadwalrapatModel = new JadwalRapatModel();
        $this->daftarpemesananModel = new DaftarPemesananModel();
        $this->tamuModel = new TamuModel();
        $this->databeritaModel = new DataBeritaModel();
    }

    public function index1()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->getPemesanan();
        $data['data_tamu'] = $this->tamuModel->getTamu();
        $data['berita_pln'] = $this->databeritaModel->getBerita();
        return view('/beranda_superadmin', $data);
    }
    public function index2()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->getPemesanan();
        $data['data_tamu'] = $this->tamuModel->getTamu();
        $data['berita_pln'] = $this->databeritaModel->getBerita();
        return view('/beranda_admin', $data);
    }
    public function index3()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->getPemesanan();
        $data['data_tamu'] = $this->tamuModel->getTamu();
        $data['berita_pln'] = $this->databeritaModel->getBerita();
        return view('/beranda_adminhumas', $data);
    }
}
