<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuaca;

class CuacaController extends Controller
{
    public function showCuacaForm()
    {
        $cuaca = auth()->user();
        return view('cuaca', data: compact('cuaca'));
    }
}
