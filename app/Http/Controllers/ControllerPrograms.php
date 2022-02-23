<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrograms extends Controller
{
    public function index(){
        echo "Ini halaman dari programs awal";
    }

    public function magang(){
        echo "Ini halaman dari programs magang";
    }

    public function karir(){
        echo "Ini halaman dari programs karir";
    }
    
    public function kunjunganIndustri(){
        echo "Ini halaman dari programs kunjungan industri";
    }
}
