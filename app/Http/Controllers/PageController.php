<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan halaman Syarat & Ketentuan
    public function termsconditions()
    {
        return view('pages.termsconditions'); // Perbaiki path-nya
    }

    // Menampilkan halaman Kebijakan Privasi
    public function privacypolicy()
    {
        return view('pages.privacypolicy'); // Pastikan ada file ini
    }
}
