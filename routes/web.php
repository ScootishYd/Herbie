<?php

use App\Http\Controllers\AutentikasiUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', function (){
    return view('daftar');
});

require __DIR__.'/auth.php';