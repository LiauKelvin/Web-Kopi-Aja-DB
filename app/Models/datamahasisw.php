<?php

namespace App\Models;

use CodeIgniter\Model;

class datamahasisw extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    // AllowedFields berfungsi untk membatasi kolom yang diizinkan untuk melakukan insert atau update data
    protected $allowedField = ['nim','nama','alamat'];
}