<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JadwalRapatModel;

class JadwalRapatController extends BaseController
{
    protected $jadwalrapatModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->jadwalrapatModel = new JadwalRapatModel();
    }

    public function index()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat();
        return view('/jadwalrapat_superadmin', $data);
    }

    public function index2()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat();
        return view('/jadwalrapat_admin', $data);
    }

    public function index3()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat();
        return view('/jadwalrapat_adminhumas', $data);
    }
    public function display($id)
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->findJadwalRapat($id);
        return view('/displayjadwalrapat_superadmin', $data);
    }

    public function display2()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat1();
        return view('/displayjadwalrapat_admin', $data);
    }

    public function display3()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat1();
        return view('/displayjadwalrapat_adminhumas', $data);
    }

    public function cetak()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat1();
        return view('/cetakjadwalrapat_superadmin', $data);
    }

    public function cetak2()
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->getJadwalRapat();
        return view('/cetakjadwalrapat_admin', $data);
    }

    public function create()
    {
        return view('/formtambahjadwalrapat_superadmin');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'mulai' => $this->request->getPost('mulai'),
            'selesai' => $this->request->getPost('selesai'),
            'agenda' => $this->request->getPost('agenda'),
            'ruangan' => $this->request->getPost('ruangan'),
            'bidang' => $this->request->getPost('bidang'),
            'jumlah_peserta' => $this->request->getPost('jumlah_peserta'),
            'status_ruangan' => $this->request->getPost('status_ruangan'),
        ];

        if (!$this->jadwalrapatModel->save($data)) {
            return redirect()->back()->with('error', $this->jadwalrapatModel->errors());
        }

        return redirect()->to(base_url('/jadwalrapat_superadmin'))->with('success', 'Data Jadwal Rapat berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data['jadwal_rapat'] = $this->jadwalrapatModel->findJadwalRapat($id);
        return view('/formeditjadwalrapat_superadmin', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'mulai' => $this->request->getPost('mulai'),
            'selesai' => $this->request->getPost('selesai'),
            'agenda' => $this->request->getPost('agenda'),
            'ruangan' => $this->request->getPost('ruangan'),
            'bidang' => $this->request->getPost('bidang'),
            'jumlah_peserta' => $this->request->getPost('jumlah_peserta'),
            'status_ruangan' => $this->request->getPost('status_ruangan'),
        ];

        if (!$this->jadwalrapatModel->update($id, $data)) {
            return redirect()->back()->with('error', $this->jadwalrapatModel->errors());
        }

        return redirect()->to(base_url('/jadwalrapat_superadmin'))->with('success', 'Data Jadwal Rapat berhasil diupdate!');
    }

    public function delete($id)
    {
        $this->jadwalrapatModel->delete($id);

        return redirect()->to(base_url('/jadwalrapat_superadmin'))->with('success', 'Data Jadwal Rapat berhasil dihapus!');
    }
}
