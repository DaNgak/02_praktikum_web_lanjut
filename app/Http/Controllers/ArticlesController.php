<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($id){
        echo "Halaman Artikel dengan ID " . $id;
    }
}
