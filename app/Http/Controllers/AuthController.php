<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'account_category' => 'required|in:case_owner,talent_researcher,reviewer'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect berdasarkan kategori akun
            switch ($request->account_category) {
                case 'case_owner':
                    return redirect()->route('dashboardco')->with('success', 'Login berhasil!');
                case 'talent_researcher':
                    return redirect()->route('dashboardtr')->with('success', 'Login berhasil!');
                case 'reviewer':
                    return redirect()->route('dashboardreview')->with('success', 'Login berhasil!');
                default:
                    return redirect()->route('dashboard')->with('success', 'Login berhasil!');
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
    }

    // Menampilkan halaman registrasi
    public function showRegister()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'account_category' => 'required|in:case_owner,talent_researcher,reviewer'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'account_category' => $request->account_category
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // Menampilkan halaman lupa password
    public function showForgotPass()
    {
        return view('auth.forgotpass');
    }

    // Proses lupa password
    public function forgotPass(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        // Logika kirim email reset password bisa ditambahkan di sini
        return back()->with('success', 'Link reset password telah dikirim ke email Anda.');
    }

    // Menampilkan halaman atur ulang password
    public function showNewPass()
    {
        return view('auth.newpass');
    }

    // Proses reset password
    public function newpass(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Password berhasil diperbarui! Silakan login.');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil.');
    }
}
