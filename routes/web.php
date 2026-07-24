<?php

use App\http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function(){
    return "Hello World";
});

Route::get('/world', [WelcomeController::class, 'hello']);

Route::get('/siswa', function ($id){});
Route::post('/siswa', function($id){});
Route::put('/siswa', function($id){});
Route::delete('/siswa', function($id){});
Route::get('/siswa/{id}', function($id){});
Route::put('/siswa/{id}', function($id){});
Route::delete('/siswa/{id}', function($id){});

Route::get('/m', function (){
    return "Hi! Selamat datang di Website Laravel";
});

Route::get('/about', function(){
    echo "NIM: 26006<br>";
    echo "Nama: Mutia izza Muzahra<br>";
    echo "Kelas: XI RPB<br><br>";

    echo "NIM: 25982<br>";
    echo "Nama: Diana Pramudita<br>";
    echo "Kelas: XI RPB<br>";
});

Route::get('/articles/{id}', function($id){
    return "Ini adalah halaman Artikel dengan ID:" . $id;
});