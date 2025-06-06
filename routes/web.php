<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CaseOwnerController;

Route::get('/', function () {
    // return view('talent.accounttr.accounttr');
    return view('caseowner.detailSL');
    // return view('caseowner.draft');
    // return view('caseowner.casepub.detail');
});

Route::get('/tkntopup', function () {
    return view('tkntopup');
})->name('tkntopup');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::match(['get', 'post'], '/accpayment', function () {
    return view('accpayment');
})->name('accpayment');


Route::match(['get', 'post'], '/collectdone', function () {
    return view('collectdone');
})->name('collectdone');
   
Route::match(['get', 'post'], '/collsurveydone', function () {
    return view('collsurveydone');
})->name('collsurveydone');


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

Route::get('/company', function () {
    return view('caseowner.companyform');
})->name('company');

Route::get('/serviceco', function () {
    return view('caseowner.serviceco');
})->name('serviceco');

Route::get('/detail', function () {
    return view('caseowner.detail');
})->name('detail');

Route::get('/detail2', function () {
    return view('caseowner.detail2');
})->name('detail2');

Route::get('/detailSL', function () {
    return view('caseowner.detailSL');
})->name('detailSL');

Route::get('/projectreport', function () {
    return view('caseowner.projectreport');
})->name('projectreport');

Route::get('/draft', function () {
    return view('caseowner.draft');
})->name('draft');



// **CASE PUBLICATION CO**
Route::get('/caseowner/casepub/form', [CaseOwnerController::class, 'showForm'])->name('caseowner.casepub.form');
Route::get('/caseowner/casepub/uploadDocument', [CaseOwnerController::class, 'uploadDocument'])->name('caseowner.casepub.uploadDocument');

Route::get('/caseowner/casepub/step1', [CaseOwnerController::class, 'step1'])->name('casepub.step1');
Route::post('/caseowner/casepub/step1', [CaseOwnerController::class, 'postStep1'])->name('casepub.postStep1');

Route::get('/caseowner/casepub/step2', [CaseOwnerController::class, 'step2'])->name('casepub.step2');
Route::post('/caseowner/casepub/step2', [CaseOwnerController::class, 'postStep2'])->name('casepub.postStep2');

Route::get('/caseowner/casepub/step3', [CaseOwnerController::class, 'step3'])->name('casepub.step3');
Route::post('/caseowner/casepub/step3', [CaseOwnerController::class, 'postStep3'])->name('casepub.postStep3');

Route::get('/caseowner/casepub/step4', [CaseOwnerController::class, 'step4'])->name('casepub.step4');
Route::post('/caseowner/casepub/step4', [CaseOwnerController::class, 'postStep4'])->name('casepub.postStep4');

Route::post('/caseowner/casepub/submit_case', [CaseOwnerController::class, 'submitCase'])->name('   submit_case');


// ROUTE COMPANY PROFILE
Route::get('/companyform', [CaseOwnerController::class, 'showCompanyForm'])->name('companyform');

Route::get('/caseowner/company/step1', [CaseOwnerController::class, 'step1'])->name('company.step1');
Route::post('/caseowner/company/step1', [CaseOwnerController::class, 'postStep1'])->name('company.postStep1');

Route::get('/caseowner/company/step2', [CaseOwnerController::class, 'step2'])->name('company.step2');
Route::post('/caseowner/company/step2', [CaseOwnerController::class, 'postStep2'])->name('company.postStep2');

Route::post('/caseowner/company/submit', [CaseOwnerController::class, 'submitCompany'])->name('company.submit');





// **DASHBOARD TR(Setelah login berhasil)**
Route::get('/dashboardtr', function () {
    return view('talent.dashboardtr');
})->name('dashboardtr');

Route::get('/servicetr', function () {
    return view('talent.servicetr');
})->name('servicetr');


Route::get('/detailtr', function () {
    return view('talent.detailtr');
})->name('detailtr');

Route::get('/accounttr', function () {
    return view('talent.accounttr.accounttr');
})->name('accounttr');

Route::get('/problem', function () {
    return view('talent.problem');
})->name('problem');