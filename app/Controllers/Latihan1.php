<?php

namespace App\Controllers;

class Latihan1 extends BaseController
{
    public function index()
    {
        $databuku['all_data1'] = [
            [
                 'judul' => 'Bumi manusia',
                 'pengarang' => 'Pramoedya Ananta Toer',
                 'total_halaman' => 300,
                 'tahun_terbit' => 2020 
            ],
            [
                'judul' => 'Laskar Pelangi',
                'pengarang' => 'Andrea Hirata',
                'total_halaman' => 500,
                'tahun_terbit' => 2012 
            ]
         ];
        if (!empty($databuku['all_data1'])) {
            return view('perpustakaan/data_buku', $databuku);
        }else {
            echo "Data tidak ada";
        }
        return view('layout/header')
            . view('perpustakaan/data_buku', $databuku)
            . view('layout/footer');
        echo 'ini controler Mahasiswa';
    }
}
