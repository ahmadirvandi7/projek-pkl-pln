<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DataBeritaModel;

class DataBeritaController extends BaseController
{
    protected $databeritaModel;


    protected $helpers = ['form'];

    public function __construct()
    {
        $this->databeritaModel = new DataberitaModel();
    }

    public function index()
    {
        $data['berita'] = $this->databeritaModel->getBerita();
        return view('/databerita_superadmin', $data);
    }

    public function index2()
    {
        $data['berita'] = $this->databeritaModel->getBerita();
        return view('/databerita_admin', $data);
    }
    public function index3()
    {
        $data['berita'] = $this->databeritaModel->getBerita();
        return view('/databerita_adminhumas', $data);
    }

    public function create()
    {
        return view('/formtambahberita_adminhumas');
    }

    public function cetak()
    {
        $data['berita'] = $this->databeritaModel->getBerita();
        return view('/cetakdataberita_adminhumas', $data);
    }
    
    public function store()
    {
        try {
            $data = [
                'kategori' => $this->request->getPost('kategori'),
                'tanggal' => $this->request->getPost('tanggal'),
                'media_pemberitaan' => $this->request->getPost('media_pemberitaan'),
                'judul_pemberitaan' => $this->request->getPost('judul_pemberitaan'),
                'link_pemberitaan' => $this->request->getPost('link_pemberitaan'),
            ];
            $this->databeritaModel->saveBerita($data);

            return redirect()->to(base_url('/databerita_adminhumas'));
        } catch (\Throwable $th) {
            log_message('error', 'Error in storing berita: ' . $th->getMessage());
            return redirect()->to(base_url('/'))->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
    public function edit($id)
    {
        $data['berita'] = $this->databeritaModel->findBerita($id);
        return view('/formeditberita_adminhumas', $data);
    }
    public function update($id)
    {
        $data = [
            'kategori' => $this->request->getPost('kategori'),
            'tanggal' => $this->request->getPost('tanggal'),
            'media_pemberitaan' => $this->request->getPost('media_pemberitaan'),
            'judul_pemberitaan' => $this->request->getPost('judul_pemberitaan'),
            'link_pemberitaan' => $this->request->getPost('link_pemberitaan'),
        ];

        $this->databeritaModel->updateBerita($id, $data);

        return redirect()->to(base_url('/databerita_adminhumas'));
    }

    public function delete($id)
    {
        $this->databeritaModel->deleteBerita($id);

        return redirect()->to(base_url('/databerita_adminhumas'));
    }
}
