<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RagadController;
use App\Http\Controllers\RanapController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\KIARajalController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RGMRajalController;
use App\Http\Controllers\RPURajalController;
use App\Http\Controllers\MTBSRajalController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
Route::get('/', [HomeController::class, 'index']);
});

//Pasien
Route::middleware(['admin', 'auth'])->group(function () {
Route::get('/pasiens', [PasienController::class, 'index'])->name('pasien');
Route::get('/pasiens/export/', [PasienController::class, 'export'])->name('show_pasien');
Route::get('/pasiens/create', [PasienController::class, 'create'])->name('create_pasien');
Route::post('/pasiens/store', [PasienController::class, 'store'])->name('store_pasien');
Route::get('/pasiens/{pasien:no_rm}/edit', [PasienController::class, 'edit'])->name('edit_pasien');
Route::post('/pasiens/{pasien:no_rm}/update', [PasienController::class, 'update'])->name('update_pasien');
Route::get('/pasiens/{pasien:no_rm}/delete', [PasienController::class, 'destroy'])->name('destroy_pasien');
Route::get('/pasiens/export', [PasienController::class, 'show'])->name('show_pasien');
});

//Layanan
Route::middleware(['auth'])->group(function () {
    Route::get('/layanan/pasien', [LayananController::class, 'pasien']);
    // Route::get('/rawat_jalan/rpu/{pasien:no_rm}/index', [RPURajalController::class, 'index'])->name('rpu');
    // Route::get('/rawat_jalan/rpu/{pasien:no_rm}/create', [RPURajalController::class, 'create'])->name('create_rpu');
    // Route::post('/rawat_jalan/rpu/{pasien:no_rm}/store', [RPURajalController::class, 'store'])->name('store_rpu');
    // Route::get('/rawat_jalan/rpu/{id}/edit/{pasien_id}', [RPURajalController::class, 'edit'])->name('edit_rpu');
    // Route::post('/rawat_jalan/rpu/{id}/update/{pasien_id}', [RPURajalController::class, 'update'])->name('update_rpu');
    // Route::get('/rawat_jalan/rpu/{id}/delete/{pasien_id}', [RPURajalController::class, 'destroy'])->name('destroy_rpu');
    // Route::get('/rawat_jalan/rpu/export', [RPURajalController::class, 'show'])->name('show_rpu');
    
});

//Rawat Jalan
Route::middleware(['auth'])->group(function () {
Route::get('/rawat_jalan/rpu', [RPURajalController::class, 'pasien']);
Route::get('/rawat_jalan/rpu/{pasien:no_rm}/index', [RPURajalController::class, 'index'])->name('rpu');
Route::get('/rawat_jalan/rpu/{pasien:no_rm}/create', [RPURajalController::class, 'create'])->name('create_rpu');
Route::post('/rawat_jalan/rpu/{pasien:no_rm}/store', [RPURajalController::class, 'store'])->name('store_rpu');
Route::get('/rawat_jalan/rpu/{id}/edit/{pasien_id}', [RPURajalController::class, 'edit'])->name('edit_rpu');
Route::post('/rawat_jalan/rpu/{id}/update/{pasien_id}', [RPURajalController::class, 'update'])->name('update_rpu');
Route::get('/rawat_jalan/rpu/{id}/delete/{pasien_id}', [RPURajalController::class, 'destroy'])->name('destroy_rpu');
Route::get('/rawat_jalan/rpu/export', [RPURajalController::class, 'show'])->name('show_rpu');

});

Route::middleware(['auth'])->group(function () {});
Route::get('/rawat_jalan/rgm', [RGMRajalController::class, 'pasien']);
Route::get('/rawat_jalan/rgm/{pasien:no_rm}/index', [RGMRajalController::class, 'index'])->name('rgm');
Route::get('/rawat_jalan/rgm/{pasien:no_rm}/create', [RGMRajalController::class, 'create'])->name('create_rgm');
Route::post('/rawat_jalan/rgm/{pasien:no_rm}/store', [RGMRajalController::class, 'store'])->name('store_rgm');
Route::get('/rawat_jalan/rgm/{id}/edit/{pasien_id}', [RGMRajalController::class, 'edit'])->name('edit_rgm');
Route::post('/rawat_jalan/rgm/{id}/update/{pasien_id}', [RGMRajalController::class, 'update'])->name('update_rgm');
Route::get('/rawat_jalan/rgm/{id}/delete/{pasien_id}', [RGMRajalController::class, 'destroy'])->name('destroy_rgm');
Route::get('/rawat_jalan/rgm/export', [RGMRajalController::class, 'show'])->name('show_rgm');


Route::middleware(['auth'])->group(function () {
Route::get('/rawat_jalan/mtbs', [MTBSRajalController::class, 'pasien']);
Route::get('/rawat_jalan/mtbs/{pasien:no_rm}/index', [MTBSRajalController::class, 'index'])->name('mtbs');
Route::get('/rawat_jalan/mtbs/{pasien:no_rm}/create', [MTBSRajalController::class, 'create'])->name('create_mtbs');
Route::post('/rawat_jalan/mtbs/{pasien:no_rm}/store', [MTBSRajalController::class, 'store'])->name('store_mtbs');
Route::get('/rawat_jalan/mtbs/{id}/edit/{pasien_id}', [MTBSRajalController::class, 'edit'])->name('edit_mtbs');
Route::post('/rawat_jalan/mtbs/{id}/update/{pasien_id}', [MTBSRajalController::class, 'update'])->name('update_mtbs');
Route::get('/rawat_jalan/mtbs/{id}/delete/{pasien_id}', [MTBSRajalController::class, 'destroy'])->name('destroy_mtbs');
Route::get('/rawat_jalan/mtbs/export', [MTBSRajalController::class, 'show'])->name('show_mtbs');
});

Route::middleware(['auth'])->group(function () {
Route::get('/rawat_jalan/kia', [KIARajalController::class, 'pasien']);
Route::get('/rawat_jalan/kia/{pasien:no_rm}/index', [KIARajalController::class, 'index'])->name('kia');
Route::get('/rawat_jalan/kia/{pasien:no_rm}/create', [KIARajalController::class, 'create'])->name('create_kia');
Route::post('/rawat_jalan/kia/{pasien:no_rm}/store', [KIARajalController::class, 'store'])->name('store_kia');
Route::get('/rawat_jalan/kia/{id}/edit/{pasien_id}', [KIARajalController::class, 'edit'])->name('edit_kia');
Route::post('/rawat_jalan/kia/{id}/update/{pasien_id}', [KIARajalController::class, 'update'])->name('update_kia');
Route::get('/rawat_jalan/kia/{id}/delete/{pasien_id}', [KIARajalController::class, 'destroy'])->name('destroy_kia');
Route::get('/rawat_jalan/kia/export', [KIARajalController::class, 'show'])->name('show_kia');
});

//Rawat Inap
Route::middleware(['auth'])->group(function () {
Route::get('/rawat_inap', [RanapController::class, 'pasien']);
Route::get('/rawat_inap/{pasien:no_rm}/index', [RanapController::class, 'index'])->name('ranap');
Route::get('/rawat_inap/{pasien:no_rm}/create', [RanapController::class, 'create'])->name('create_ranap');
Route::post('/rawat_inap/{pasien:no_rm}/store', [RanapController::class, 'store'])->name('store_ranap');
Route::get('/rawat_inap/{id}/edit/{pasien_id}', [RanapController::class, 'edit'])->name('edit_ranap');
Route::post('/rawat_inap/{id}/update/{pasien_id}', [RanapController::class, 'update'])->name('update_ranap');
Route::get('/rawat_inap/{id}/delete/{pasien_id}', [RanapController::class, 'destroy'])->name('destroy_ranap');
Route::get('/rawat_inap/export', [RanapController::class, 'show'])->name('show_ranap');
});


//Ruang Gawat Darurat
Route::middleware(['auth'])->group(function () {
Route::get('/ruang_gawat_darurat', [RagadController::class, 'pasien'])->middleware('auth');
Route::get('/ruang_gawat_darurat/{pasien:no_rm}/index', [RagadController::class, 'index'])->name('ragad');
Route::get('/ruang_gawat_darurat/index/cari', [RagadController::class, 'cari'])->name('cari_ragad');
Route::get('/ruang_gawat_darurat/{pasien:no_rm}/create', [RagadController::class, 'create'])->name('create_ragad');
Route::post('/ruang_gawat_darurat/{pasien:no_rm}/store', [RagadController::class, 'store'])->name('store_ragad');
Route::get('/ruang_gawat_darurat/{id}/edit/{pasien_id}', [RagadController::class, 'edit'])->name('edit_ragad');
Route::post('/ruang_gawat_darurat/{id}/update/{pasien_id}', [RagadController::class, 'update'])->name('update_ragad');
Route::get('/ruang_gawat_darurat/{id}/delete/{pasien_id}', [RagadController::class, 'destroy'])->name('destroy_ragad');
Route::get('/ruang_gawat_darurat/export', [RagadController::class, 'show'])->name('show_ragad');
});


//user
Route::middleware(['admin', 'auth'])->group(function () {
Route::get('/users', [UserController::class, 'index'])->name('index_users');
Route::get('/users/show', [UserController::class, 'show'])->name('show_users');
Route::get('/users/create', [UserController::class, 'create'])->name('create_users');
Route::post('/users/store', [UserController::class, 'store'])->name('store_users');
Route::get('/users/{nik}/edit', [UserController::class, 'edit'])->name('edit_users');
Route::post('/users/{nik}/update', [UserController::class, 'update'])->name('update_users');
Route::get('/users/{nik}/delete', [UserController::class, 'destroy'])->name('destroy_users');
Route::post('/users/{nik}/password', [UserController::class, 'password'])->name('password_users');
// Route::post('/users/{nik}/changePassword', [UserController::class, 'changePassword'])->name('changePassword_index');
Route::get('/users/export/', [UserController::class, 'export'])->name('excel-users');
// Route::get('users/export/', 'UsersController@export');
});

//profile
Route::middleware(['auth'],['admin'])->group(function () {
Route::get('/profile/{nik}', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/{nik}/update', [ProfileController::class, 'update'])->name('update_profile');
Route::get('/profile/{nik}/editPassword', [ProfileController::class, 'password'])->name('password');
Route::post('/profile/{nik}/updatePassword', [ProfileController::class, 'changePassword'])->name('changePassword');
});

Route::middleware(['guest'])->group(function () {
Route::get('/sign_in', [SigninController::class, 'index'])->name('login');
Route::post('/sign_in', [SigninController::class, 'authenticate']);
});

Route::post('/logout', [SigninController::class, 'logout']);


Route::middleware(['guest'])->group(function () {
Route::get('/sign_up', [SignupController::class, 'index']);
Route::post('/sign_up', [SignupController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
Route::view('/about', 'about');
});

Route::middleware(['auth','guest','admin'])->group(function () {
Route::view('/403', '403');
});




