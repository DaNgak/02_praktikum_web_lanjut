<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNews extends Controller
{
    public function index($params = null){
        if ($params != null){
            return redirect("https://www.educastudio.com/news/" . $params);
        } else {
            return redirect("https://www.educastudio.com/news");
        } 
    }
}
