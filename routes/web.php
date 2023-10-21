<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FotoAsetController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratKeputusanController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratPerintahTugasController;
use App\Http\Controllers\UndanganKeluarController;
use App\Http\Controllers\UndanganMasukController;
use App\Models\SuratKeluar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home-program-kerja', [ProgramKerjaController::class, 'home'])->name('programkerja.home');
Route::get('/home-galeri', [GaleriController::class, 'home'])->name('galeri.home');
Route::get('/home-kegiatan', [KegiatanController::class, 'home'])->name('kegiatan.home');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('admin.index');
    })->name('admin.index');
    
    Route::get('/admin-arsip', function () {
        return view('admin.arsip');
    })->name('admin.arsip');

    // galeri
    Route::resource('galeri', GaleriController::class);

    //kegiatan
    Route::resource('kegiatan', KegiatanController::class);

    //kegiatan
    Route::resource('programkerja', ProgramKerjaController::class);

    // sub arsip
    Route::resource('suratkeluar', SuratKeluarController::class);
    Route::resource('suratmasuk', SuratMasukController::class);
    Route::resource('undanganmasuk', UndanganMasukController::class);
    Route::resource('undangankeluar', UndanganKeluarController::class);
    Route::resource('absensi', AbsensiController::class);
    Route::resource('laporankeuangan', LaporanKeuanganController::class);
    Route::resource('suratkeputusan', SuratKeputusanController::class);
    Route::resource('suratperintahtugas', SuratPerintahTugasController::class);

    // home arsip
    Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip');
    Route::get('/arsip-surat-keluar', [ArsipController::class, 'suratkeluar'])->name('arsip.suratkeluar');
    Route::get('/arsip-surat-masuk', [ArsipController::class, 'suratmasuk'])->name('arsip.suratmasuk');
    Route::get('/arsip-undangan-keluar', [ArsipController::class, 'undangankeluar'])->name('arsip.undangankeluar');
    Route::get('/arsip-undangan-masuk', [ArsipController::class, 'undanganmasuk'])->name('arsip.undanganmasuk');
    Route::get('/arsip-absensi', [ArsipController::class, 'absensi'])->name('arsip.absensi');
    Route::get('/arsip-laporan-keuangan', [ArsipController::class, 'laporankeuangan'])->name('arsip.laporankeuangan');
    Route::get('/arsip-profil-anggota', [ArsipController::class, 'profilanggota'])->name('arsip.profilanggota');
    Route::get('/arsip-surat-keputusan', [ArsipController::class, 'suratkeputusan'])->name('arsip.suratkeputusan');
    Route::get('/arsip-surat-perintah-tugas', [ArsipController::class, 'suratperintahtugas'])->name('arsip.suratperintahtugas');
});