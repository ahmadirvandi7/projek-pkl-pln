<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TamuModel;

class DatatamuController extends BaseController
{
    protected $tamuModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->tamuModel = new TamuModel();
    }

    public function index()
    {
        $data['tamu'] = $this->tamuModel->getTamu();
        return view('/datatamu_admin', $data);
    }

    public function index2()
    {
        $data['tamu'] = $this->tamuModel->getTamu();
        return view('/datatamu_superadmin', $data);
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
        return view('/formtambahtamu_admin');
    }

    public function store()
    {
        try {
            $data = [
                'nama_tamu' => $this->request->getPost('nama_tamu'),
                'tanggal_waktu' => $this->request->getPost('tanggal_waktu'),
                'asal_instansi' => $this->request->getPost('asal_instansi'),
                'no_telepon' => $this->request->getPost('no_telepon'),
                'tujuan' => $this->request->getPost('tujuan'),
            ];

            $this->tamuModel->saveTamu($data);

            return redirect()->to(base_url('/datatamu_admin'));
        } catch (\Throwable $th) {
            log_message('error', 'Error in storing tamu: ' . $th->getMessage());
            return redirect()->to(base_url('/'))->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }


    public function edit($id)
    {
        $data['tamu'] = $this->tamuModel->findTamu($id);
        return view('/formeditdatatamu_admin', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_tamu' => $this->request->getPost('nama_tamu'),
            'tanggal_waktu' => $this->request->getPost('tanggal_waktu'),
            'asal_instansi' => $this->request->getPost('asal_instansi'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'tujuan' => $this->request->getPost('tujuan'),
        ];

        $this->tamuModel->updateTamu($id, $data);

        return redirect()->to(base_url('/datatamu_admin'));
    }


    public function delete($id)
    {
        $this->tamuModel->deleteTamu($id);

        return redirect()->to(base_url('/datatamu_admin'));
    }
}
