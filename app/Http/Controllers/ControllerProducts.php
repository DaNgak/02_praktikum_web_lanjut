<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProducts extends Controller
{
    public function category1(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    }
    public function category2(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    }
    public function category3(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    }
    public function category4(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    }
}
