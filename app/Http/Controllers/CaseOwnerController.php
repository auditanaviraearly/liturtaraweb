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
        $step1 = session('form_data.step1', []);
        $step2 = session('form_data.step2', []);
        $step3 = session('form_data.step3', []);

        $formData = array_merge($step1, $step2, $step3);

        return view('casepub.step4', compact('formData'));
    }

    public function postStep4(Request $request)
    {
        $request->validate([
            'early_due_date' => 'required|date',
            'final_due_date' => 'required|date',
            'agree_uu'       => 'accepted',
            'agree_sk'       => 'accepted',
        ]);

        session(['form_data.step4' => $request->only('early_due_date', 'final_due_date', 'agree_uu', 'agree_sk')]);

        return redirect()->route('casepub.submitFinal');
    }

    public function submitFinal(Request $request)
    {
        $formData = array_merge(
            session('form_data.step1', []),
            session('form_data.step2', []),
            session('form_data.step3', []),
            session('form_data.step4', [])
        );

        // Contoh jika ada model:
        // Case::create($formData);

        session()->forget('form_data');

        return redirect()->route('home')->with('success', 'Masalah berhasil dikirim!');
    }

    public function uploadDocument()
    {
        return view('casepub.uploadDocument');
    }

    // ====================== COMPANY PROFILE FORM ======================

    public function showCompanyForm()
    {
        return view('caseowner.company.companyform');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'company_name'             => 'required|string|max:255',
            'company_description'      => 'required|string',
            'company_established_date' => 'nullable|date|before_or_equal:today',
            'company_domicile'         => 'required|string|max:255',
            'company_email'            => 'required|email',
            'company_phone'            => 'nullable|string|max:20',
            'company_website'          => 'nullable|url',
            'company_sosmed'           => 'required|string|max:255',
            'company_address'          => 'required|string',
            'company_logo'             => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('company_logo')) {
            $path = $request->file('company_logo')->store('public/company_logos');
            $validated['company_logo_path'] = $path;
        }

        // Simpan ke database jika ada model
        // Company::create($validated);

        return redirect()->route('companyform')->with('success', 'Data perusahaan berhasil disimpan.');
    }

    public function showDetail($id)
{
    // Ambil data kasus berdasarkan ID
    // $case = CaseModel::find($id);

    // Cek jika data tidak ditemukan
    // if (!$case) {
    //     abort(404);
    // }

    // // Return view dengan data kasus
    // return view('caseowner.detail', compact('case'));
}


    
}
