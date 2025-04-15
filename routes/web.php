<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('auth.login');
});

// **AUTH ROUTES (LOGIN & REGISTER)**
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/termscondition', [PageController::class, 'termsconditions'])->name('termsconditions');
Route::get('/privacypolicy', [PageController::class, 'privacypolicy'])->name('privacypolicy');


Route::get('/forgotpass', [AuthController::class, 'showForgotPass'])->name('forgotpass');

Route::get('/newpass', [AuthController::class, 'showNewPass'])->name('newpass');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/registerconfirm',[AuthController::class, 'showRegisterConfirm'])->name('registerconfirm');

Route::get('/resetpassconfirm',[AuthController::class, 'showResetPassConfirm'])->name('resetpassconfirm');

Route::get('/resetpassconfirm2',[AuthController::class, 'showResetpassConfirm2'])->name('resetpassconfirm');



// **DASHBOARD CO(Setelah login berhasil)**
Route::get('/dashboardco', function () {
    return view('caseowner.dashboardco');
})->name('dashboardco');

Route::get('/accountco', function () {
    return view('caseowner.accountco');
})->name('accountco');

Route::get('/serviceco', function () {
    return view('caseowner.serviceco');
})->name('serviceco');


// **DASHBOARD TR(Setelah login berhasil)**
Route::get('/dashboardtr', function () {
    return view('talent.dashboardtr');
})->name('dashboardtr');

Route::get('/servicetr', function () {
    return view('talent.servicetr');
})->name('servicetr');