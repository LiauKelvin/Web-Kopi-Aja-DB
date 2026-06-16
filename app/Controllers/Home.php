<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/header')
            . view('content/landing_page')
            . view('perpustakaan/link_page')
            . view('layout/footer');
    }
}
