<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analisa;

class AnalisaController extends Controller
{
    public function showAnalisaForm()
    {
        $analisa = auth()->user();
        return view('analisa', compact('analisa'));
    }
}
