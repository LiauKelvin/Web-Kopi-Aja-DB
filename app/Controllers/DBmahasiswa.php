<?php

namespace App\Controllers;

use App\Models\datamahasisw;

class DBmahasiswa extends BaseController
{
    protected $data_mahasisw;

    public function __construct()
    {
        $this->data_mahasisw = new datamahasisw();
    }
    public function index()
    {
        $getData = $this->data_mahasisw->findAll();

        $data = [
            'data' => $getData
        ];

        if (!empty($data)) {

            return view('layout/header')
                . view('content/base_mahasiswa', $data)
                . view('layout/footer');
        } else {
            echo "data tidak ada yang ditemukan";
        }
    }
}