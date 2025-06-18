<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TalentController extends Controller
{
    public function showForm()
    {
        return view('talent.accounttr.formacc');
    }

    public function postStep1(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'birthday' => 'nullable|date',
            'domicile' => 'nullable|string|max:255',
            'gender' => 'nullable|string|in:Male,Female,Other',
            'agency_name' => 'nullable|string|max:255',
            'last_education' => 'nullable|string|max:255',
            'achievements' => 'nullable|string|max:500',
        ]);

        Session::put('talent_step1', $validated);

        return redirect()->route('talent.accounttr.formacc')->with('step', 2);
    }

    public function postStep2(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);

        Session::put('talent_step2', $validated);

        // Simpan ke database atau gabungkan data dari semua step
        $data = array_merge(
            Session::get('talent_step1', []),
            Session::get('talent_step2', [])
        );

        // Contoh: simpan ke database (jika ada model Talent)
        // Talent::create($data);

        Session::forget(['talent_step1', 'talent_step2']);

        return redirect()->route('talent.accounttr.formacc')->with('success', 'Data Talent berhasil disimpan.');
    }
}
