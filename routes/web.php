<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CaseOwnerController;

Route::get('/', function () {
    // return view('caseowner.casepub.form');
    return view('caseowner.casepub.detail');
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

// **CASE PUBLICATION CO**
Route::get('/caseowner/casepub/form', [CaseOwnerController::class, 'showForm'])->name('caseowner.casepub.form');
Route::get('/caseowner/casepub/uploadDocument', [CaseOwnerController::class, 'uploadDocument'])->name('caseowner.casepub.uploadDocument');


Route::get('/step1', [CaseOwnerController::class, 'step1'])->name('casepub.step1');
Route::post('/step1', [CaseOwnerController::class, 'postStep1'])->name('casepub.postStep1');

Route::get('/step2', [CaseOwnerController::class, 'step2'])->name('casepub.step2');
Route::post('/step2', [CaseOwnerController::class, 'postStep2'])->name('casepub.postStep2');

Route::get('/step3', [CaseOwnerController::class, 'step3'])->name('casepub.step3');
Route::post('/step3', [CaseOwnerController::class, 'postStep3'])->name('casepub.postStep3');

Route::get('/step4', [CaseOwnerController::class, 'step4'])->name('casepub.step4');
Route::post('/step4', [CaseOwnerController::class, 'postStep4'])->name('casepub.postStep4');

Route::post('/submit_case', [CaseOwnerController::class, 'submitCase'])->name('submit_case');


// **DASHBOARD TR(Setelah login berhasil)**
Route::get('/dashboardtr', function () {
    return view('talent.dashboardtr');
})->name('dashboardtr');

Route::get('/servicetr', function () {
    return view('talent.servicetr');
})->name('servicetr');