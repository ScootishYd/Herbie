<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use App\Models\Stok;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();
        $dataLahan = Lahan::all();
        $dataStok = Stok::all();

        return view('dashboard', compact('dataLahan', 'dataStok', 'user'));
    }

    public function submitLahan(Request $request)
    {
        $lahan = new Lahan();
        $lahan->id = Str::uuid();
        $lahan->nama_lahan = $request->nama_lahan;
        $lahan->pemilik = $request->pemilik;
        $lahan->lokasi = $request->lokasi;
        $lahan->luas = $request->luas;
        $lahan->tgl_mulai_tanam = $request->tgl_mulai_tanam;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            // Pindahkan file ke folder yang sesuai
            $file->move(public_path('uploads/lahan'), $filename);
            $lahan->foto = 'uploads/lahan/' . $filename;
        } else {
            $lahan->foto = null;
        }

        $lahan->save();

        return redirect()->back()->with('success', 'Lahan berhasil disimpan!');
    }

    public function updateLahan(Request $request, $id)
    {
        $lahan = Lahan::findOrFail($id);
        return response()->json($lahan);

        // return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui!');
    }

    public function submitStok(Request $request)
    {
        $stok = new Stok();
        $stok->id = $request->id;
        $stok->nama_barang = $request->nama_barang;
        $stok->persediaan = $request->persediaan;
        $stok->satuan = $request->satuan;
        $stok->keterangan = $request->keterangan;

        $stok->save();

        return redirect()->back()->with('success', 'Stok berhasil disimpan!');
    }

    public function editStok(Request $request, $id)
    {
        dd($id);
        $stok = Stok::find($id);
        $stok->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui!');
    }
}
