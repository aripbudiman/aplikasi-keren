<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DatabarangModel;
use App\Models\JenisModel;
use App\Models\SatuanModel;

class DataBarang extends BaseController
{
    protected $DatabarangModel,
        $SatuanModel,
        $JenisBarangModel;
    public function __construct()
    {
        $this->DatabarangModel = new DatabarangModel();
        $this->SatuanModel = new SatuanModel();
        $this->JenisBarangModel = new JenisModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data barang',
            'kodebarang' => $this->DatabarangModel->kodebarang(),
            'jenis' => $this->JenisBarangModel->findAll(),
            'satuan' => $this->SatuanModel->findAll(),
            'databarang' => $this->DatabarangModel->getBarang()
        ];
        return view('databarang/index', $data);
    }
}
