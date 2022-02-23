<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNews extends Controller
{
    public function index($berita = "Tidak ada"){
        echo "Ini halaman berita = " . $berita;
    }

}
