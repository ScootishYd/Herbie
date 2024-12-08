<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    // Menampilkan form pengaturan akun
    public function showAccountForm()
    {
        // Mengambil data akun dari user yang sedang login
        $account = auth()->user(); // Mengambil data akun yang sedang login
        return view('account', compact('account'));
    }

    // Menangani pembaruan data akun
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari akun berdasarkan ID
        $account = Account::findOrFail($id);

        // Update data akun
        $account->username = $request->input('username');
        $account->email = $request->input('email');

        // Jika ada password baru, enkripsi dan perbarui
        if ($request->filled('password')) {
            $account->password = bcrypt($request->input('password')); // Enkripsi password jika ada perubahan
        }

        // Jika ada file foto profil yang diunggah
        if ($request->hasFile('profile')) {
            // Simpan foto profil dan ambil pathnya
            $profilePath = $request->file('profile')->store('profiles', 'public');
            $account->profile_picture_url = $profilePath;
        }

        // Simpan perubahan
        $account->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('account')->with('success', 'Akun berhasil diperbarui');
    }
}
