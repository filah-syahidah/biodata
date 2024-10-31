<?php

use App\Http\Controllers\JalurController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//ini adalah route tanpa MVC
Route::get('/jalurbaru', function () {
    return 'Ini Jalur Baru Tanpa MVC';
});


//ini adalah route menggunakan view
Route::get('/jalurview', function () {
    return view('viewjalur');
});
 

//ini adalah route menggunakan view dan controller
Route::get('/jalurcontroller', [JalurController::class, 'index']);


//ini adalah route menggunakan view, controller dan model
Route::get('/jalurmodel', [JalurController::class, 'menampilkanDataModel']);

//ini adalah route menampilkan biodata
Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);

