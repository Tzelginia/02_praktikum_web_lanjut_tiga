<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
// Route::get('/', function () {
//     return view('welcome');
// });
//homer
Route::get('/Home',[HomeController::class,'home'])->name('dashboard');
//prefix
Route::prefix("Category")->group(function(){
    Route::get("/marbel-edu-games", [ProductController::class, 'cat1'])->name('cat1');
    Route::get("/marbel-and-friends-kind-games", [ProductController::class, 'cat2'])->name('cat2');
    Route::get("/riri-story-books", [ProductController::class, 'cat3'])->name('cat3');
    Route::get("/kolak-kids-songs", [ProductController::class, 'cat4'])->name('cat4');
});
//param
Route::get("/news", [NewsController::class, 'news']);
Route::get("/news/{berita}", [NewsController::class, 'news']);
//prefix
Route::prefix("Program")->group(function(){
    Route::get("/karir", [ProgramController::class, 'karir'])->name('karir');
    Route::get("/magang", [ProgramController::class, 'magang'])->name('magang');
    Route::get("/kunjungan-industri", [ProgramController::class, 'kunjungan_industri'])->name('kunjungan_industri');
});
//about
Route::get("/about-us", [AboutController::class, 'about'])->name('AboutUs');
//contact
Route::get("/contact-us", [ContactController::class, 'contact'])->name('ContactUs');