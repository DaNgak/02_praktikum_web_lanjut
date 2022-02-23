<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAboutUs;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerNews;
use App\Http\Controllers\ControllerProducts;
use App\Http\Controllers\ControllerPrograms;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Prak 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "Nama : Aria Pratama Effendi</br>NIM : 2041720112";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID " . $id;
// });

// Prak 2
// Nomer 2
// Route::get("/", [PageController::class, 'index']);
// Route::get("/about", [PageController::class, 'about']);
// Route::get("/articles/{id}", [PageController::class, 'articles']);

// Nomer 3
// Route::get("/", [HomeController::class, 'index']);
// Route::get("/about", [AboutController::class, 'index']);
// Route::get("/articles/{id}", [ArticlesController::class, 'index']);

// Prak 3
Route::get("/", [ControllerHome::class, 'index']);

Route::get("/", [ControllerHome::class, 'index']);

Route::prefix("category")->group(function(){
    Route::get("/marbel-edu-games", [ControllerProducts::class, 'category1']);
    Route::get("/marbel-and-friends-kind-games", [ControllerProducts::class, 'category2']);
    Route::get("/riri-story-books", [ControllerProducts::class, 'category3']);
    Route::get("/kolak-kids-songs", [ControllerProducts::class, 'category4']);
});

Route::get("/news", [ControllerNews::class, 'index']);
Route::get("/news/{berita}", [ControllerNews::class, 'index']);

Route::prefix("program")->group(function(){
    Route::get("/karir", [ControllerPrograms::class, 'karir']);
    Route::get("/magang", [ControllerPrograms::class, 'magang']);
    Route::get("/kunjungan-industri", [ControllerPrograms::class, 'kunjunganIndustri']);
});

Route::get("/about-us", [ControllerAboutUs::class, 'index']);

// Route::get("/about", [ControllerAboutUs::class, 'index']);

