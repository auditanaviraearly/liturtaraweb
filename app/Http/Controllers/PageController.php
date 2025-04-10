<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan halaman Syarat & Ketentuan
    public function termsconditions()
    {
        return view('pages.termsconditions');
    }

    // Menampilkan halaman Kebijakan Privasi
    public function privacypolicy()
    {
        return view('pages.privacypolicy'); 
    }
}
