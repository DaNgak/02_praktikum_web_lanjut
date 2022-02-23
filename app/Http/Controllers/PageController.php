<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "Nama : Aria Pratama Effendi</br>NIM : 2041720112";
    }

    public function articles($id){
        echo "Halaman Artikel dengan ID " . $id;
    }
}
