<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProducts extends Controller
{
    public function index($product){
        echo "Ini halaman dari product " . $product;
    }

    public function category1(){
        echo "Halaman Category Marbel Edu Games";
    }
    public function category2(){
        echo "Halaman Category Marbel And Friends Kids Games";
    }
    public function category3(){
        echo "Halaman Category Riri Story Books";
    }
    public function category4(){
        echo "Halaman Category Kolak Kids Songs";
    }
}
