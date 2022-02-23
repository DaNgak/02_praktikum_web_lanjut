<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContactUs extends Controller
{
    public function index(){
        return redirect('https://www.educastudio.com/contact-us');
    } 
    
    public function profile(){
        return "Aria Pratama Effendi / 2041720112 / TI 2F";
    }

    public function address(){
        return "Jl KH Moh Kholil Bangkalan";
    }
}