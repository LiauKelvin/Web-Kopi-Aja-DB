<?php

namespace App\Models;

use CodeIgniter\Model;

class KopiModel extends Model
{
    protected $table = 'tblproduct';
    protected $primaryKey = 'id';
    // AllowedFields berfungsi untk membatasi kolom yang diizinkan untuk melakukan insert atau update data
    protected $allowedFields = ['name','code','image','price'];

}
