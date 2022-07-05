<?php

namespace App\Models;

use CodeIgniter\Model;

class DatabarangModel extends Model
{
    protected $table            = 'data_barang';
    protected $primaryKey       = 'id';
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_barang', 'nama_barang', 'satuan', 'jenis_barang', 'stok_barang'];


    public function kodebarang()
    {
        $kode = $this->db->table('data_barang')
            ->select('RIGHT(kode_barang,3) as kode', FALSE)
            ->orderBy('kode_barang', 'DESC')
            ->limit(1)->get()->getRowArray();

        if ($kode['kode'] == NULL) {
            $no = 1;
        } else {
            $no = intval($kode['kode']) + 1;
        }
        $barang = "TMJ";
        $batas = str_pad($no, 3, "0", STR_PAD_LEFT);
        $kodebarang = $barang . $batas;
        return $kodebarang;
    }

    public function getBarang()
    {
        return $this->db->table('data_barang')
            ->select('*')
            ->join('jenis_barang', 'data_barang.jenis_barang=jenis_barang.id')
            ->join('satuan', 'data_barang.satuan=satuan.id')
            ->get()->getResultArray();
    }
}
