<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data['all_data'] = [
            [
                 'name' => 'Ikhsan Skateboard',
                 'donate' => 100000
            ],
            [
                'name' => 'Ipin Skuter',
                'donate' => 30000
            ]
         ];
        return view('layout/header')
            . view('content/data_mahasiswa', $data)
            . view('layout/footer');
        echo 'ini controler Mahasiswa';
    }
}
