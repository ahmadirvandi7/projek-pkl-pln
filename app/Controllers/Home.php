<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JadwalRapatModel;
use App\Models\DaftarPemesananModel;
use App\Models\TamuModel;
use App\Models\DataBeritaModel;

class Home extends BaseController
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
    public function index()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat();
        $data['daftar_pemesanan'] = $this->daftarpemesananModel->getPemesanan();
        $data['data_tamu'] = $this->tamuModel->getTamu();
        $data['berita_pln'] = $this->databeritaModel->getBerita();

        $path="beranda_admin";
        if(in_groups("superadmin")){
            $path= "beranda_superadmin";
        }else if(in_groups("adminhumas")){
            $path= "beranda_adminhumas";
        }
        return redirect()->route($path,$data);
    }


    // public function jadwalrapat_admin(): string
    // {
    //     return view('jadwalrapat_admin');
    // }

    // public function datadriver_admin(): string
    // {
    //     return view('datadriver_admin');
    // }

    // public function datatamu_admin(): string
    // {
    //     return view('datatamu_admin');
    // }

    // public function formtambahdatatamu_admin(): string
    // {
    //     return view('formtambahtamu_admin');
    // }





    //superadmin
    // public function beranda_superadmin(): string
    // {
    //     return view('beranda_superadmin');
    // }


    // //admin humas
    // public function beranda_adminhumas(): string
    // {
    //     return view('beranda_adminhumas');
    // }


}
