<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

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

Route::get('app', [IndexController::class, 'base']);
Route::get('/', [IndexController::class, 'index']);
Route::get('tentang', [IndexController::class, 'tentang']);
Route::get('visi-dan-misi', [IndexController::class, 'visiMisi']);
Route::get('maklumat', [IndexController::class, 'maklumat']);
Route::get('selayang-pandang', [IndexController::class, 'selayangPandang']);
Route::get('struktur-organisasi', [IndexController::class, 'strukturOrganisasi']);
Route::get('pegawai-opd', [IndexController::class, 'pegawai']);
Route::get('berita', [IndexController::class, 'berita']);
Route::get('berita/{berita}', [IndexController::class, 'beritaBaca']);
Route::get('artikel', [IndexController::class, 'artikel']);
Route::get('artikel/{artikel}', [IndexController::class, 'artikelBaca']);
Route::get('standar-pelayanan', [IndexController::class, 'standarPelayanan']);
Route::get('service-delivery', [IndexController::class, 'serviceDelivery']);
Route::get('dokumen-publik', [IndexController::class, 'dokumenPublik']);
Route::get('dokumen-publik/{publikasi}', [IndexController::class, 'dokumenPublikBaca']);
Route::get('dokumen-kinerja', [IndexController::class, 'dokumenKinerja']);
Route::get('laporan-skm', [IndexController::class, 'laporanSkm']);
Route::get('laporan-tindak-lanjut-skm', [IndexController::class, 'tindakLanjutSkm']);
Route::get('ppid', [IndexController::class, 'ppid']);
Route::get('informasi', [IndexController::class, 'informasi']);
Route::get('informasi/{informasi}', [IndexController::class, 'informasiBaca']);
Route::get('galeri-foto', [IndexController::class, 'galeriFoto']);
Route::get('galeri-video', [IndexController::class, 'galeriVidio']);
Route::get('kontak', [IndexController::class, 'kontak']);
Route::get('faq', [IndexController::class, 'faq']);
Route::get('informasi-pengaduan', [IndexController::class, 'informasiPengaduan']);
