<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Hello World";
    }

    public function coba()
    {
        echo "Ini adalah halaman rumah saya";
    }

    public function about($nama = null, $umur = 0)
    {
        echo "Hi, nama saya adalah $nama. Usia saya $umur tahun.";
    }

    public function datdir()
    {
        return view('datdir');
    }
}
