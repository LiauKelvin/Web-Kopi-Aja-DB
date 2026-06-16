<?php

namespace App\Models;

use CodeIgniter\Model;

class PerpusModel extends Model
{
    protected $table = 'mahasiswa2';
    protected $primaryKey = 'id';
    // AllowedFields berfungsi untk membatasi kolom yang diizinkan untuk melakukan insert atau update data
    protected $allowedFields = ['judul','pengarang','total_halaman','tahun_terbit'];
}