<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SatuanModel;
use App\Models\JenisModel;

class Konfigurasi extends BaseController
{
    protected $SatuanModel, $JenisModel;
    public function __construct()
    {
        $this->SatuanModel = new SatuanModel();
        $this->JenisModel = new JenisModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Satuan',
            'satuan' => $this->SatuanModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('konfigurasi/index', $data);
    }

    public function tambahSatuan()
    {
        if ($this->request->isAJAX()) {
            $this->SatuanModel->save([
                'nama_satuan' => htmlspecialchars($this->request->getPost('namasatuan'))
            ]);
            $response = [
                'status' => true,
            ];

            echo json_encode($response);
        } else {
            exit('Maaf tidak bisa dilanjutkan');
        }
    }

    public function delete_satuan()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $this->SatuanModel->delete($id);
            $response = [
                'status' => true,
            ];
            echo json_encode($response);
        } else {
            exit('Maaf tidak bisa dilanjut');
        }
    }

    public function jenis_barang()
    {
        $data = [
            'title' => 'Jenis barang',
            'jenis' => $this->JenisModel->findAll()
        ];
        return view('konfigurasi/jenis_barang', $data);
    }

    public function tambah_jenis()
    {
        if ($this->request->isAJAX()) {
            $this->JenisModel->save([
                'nama_jenis' => htmlspecialchars($this->request->getVar('namaJenis'))
            ]);
            $response = [
                'status' => true
            ];
            echo json_encode($response);
        } else {
            exit('Maaf tidak bisa dilanjutkan');
        }
    }

    public function delete_jenis()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $this->JenisModel->delete($id);

            $response = [
                'status' => true
            ];
            echo json_encode($response);
        } else {
            exit('Maaf tidak bisa dilanjutkan');
        }
    }
}
