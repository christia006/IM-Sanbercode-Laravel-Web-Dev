<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Tampilkan halaman register
    public function register()
    {
        return view('register'); // pastikan file resources/views/register.blade.php ada
    }

    // Terima data form dan kirim ke view welcome
    public function welcome(Request $request)
    {
        // Ambil data dari form
        $first_name   = $request->input('first_name');
        $last_name    = $request->input('last_name');
        $gender       = $request->input('gender');
        $nationality  = $request->input('nationality');
        $languages    = $request->input('language', []); // default array kosong
        $bio          = $request->input('bio');

        // Kirim semua data ke view welcome
        return view('welcome', compact(
            'first_name',
            'last_name',
            'gender',
            'nationality',
            'languages',
            'bio'
        ));
    }
}
