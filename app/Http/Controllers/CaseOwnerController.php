<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseOwnerController extends Controller
{
    public function showForm()
    {
        return view('caseowner.casepub.form');
    }

    public function step1()
    {
        return view('casepub.step1');
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'fullname'      => 'required|string',
            'phone_number'  => 'required|string',
            'email'         => 'required|email',
            'company_name'  => 'required|string',
        ]);

        session(['form_data.step1' => $request->only('fullname', 'phone_number', 'email', 'company_name')]);

        return redirect()->route('casepub.step2');
    }

    public function step2()
    {
        return view('casepub.step2');
    }

    public function postStep2(Request $request)
    {
        $request->validate([
            'case_name'        => 'required|string|max:255',
            'case_category'    => 'required|string',
            'case_description' => 'required|string',
            'category_level'   => 'required|string',
            'input_link'       => 'nullable|url',
        ]);

        session(['form_data.step2' => $request->only('case_name', 'case_category', 'case_description', 'category_level', 'input_link')]);

        return redirect()->route('casepub.step3');
    }

    public function step3()
    {
        return view('casepub.step3');
    }

    public function postStep3(Request $request)
    {
        $request->validate([
            'what'  => 'required|string',
            'who'   => 'required|string',
            'when'  => 'required|string',
            'where' => 'required|string',
            'why'   => 'required|string',
            'how'   => 'required|string',
        ]);

        session(['form_data.step3' => $request->only('what', 'who', 'when', 'where', 'why', 'how')]);

        return redirect()->route('casepub.step4');
    }

    public function step4()
    {
        // Ambil semua data dari session
        $step1 = session('form_data.step1', []);
        $step2 = session('form_data.step2', []);
        $step3 = session('form_data.step3', []);

        $formData = array_merge($step1, $step2, $step3);

        return view('casepub.step4', compact('formData'));
    }

    public function postStep4(Request $request)
{
    // Validasi form data, termasuk checkbox
    $request->validate([
        'early_due_date' => 'required|date',
        'final_due_date' => 'required|date',
        'agree_uu' => 'accepted',  // Pastikan checkbox 'Setuju dengan UU' dicentang
        'agree_sk' => 'accepted',  // Pastikan checkbox 'Setuju dengan SK' dicentang
    ]);

    // Menyimpan data ke dalam session (atau langsung ke database)
    session(['form_data.step4' => $request->only('early_due_date', 'final_due_date', 'agree_uu', 'agree_sk')]);

    // Redirect ke halaman selesai atau konfirmasi
    return redirect()->route('casepub.submitFinal');
}


    public function submitFinal(Request $request)
    {
        // simpan ke database jika modelnya sudah ada, contoh:
        // Case::create($formData);

        // Hapus data session
        session()->forget('form_data');

        return redirect()->route('home')->with('success', 'Masalah berhasil dikirim!');
    }


    public function uploadDocument()
    {
        return view('casepub.uploadDocument');
    }


}




