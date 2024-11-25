<?php

use App\Http\Controllers\AutentikasiUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';