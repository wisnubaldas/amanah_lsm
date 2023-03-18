<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

Route::get('/', function () {
    return view('front.welcome');
});

Route::prefix(env('FRONT_PREFIX'))->group(function () {
    Route::controller(FrontController::class)->group(function () {
        Route::get('sejarah', 'sejarah')->name('sejarah');
        Route::get('timeline', 'timeline')->name('timeline');
        Route::get('visimisi', 'visimisi')->name('visimisi');
        Route::get('program-keahlian', 'program_keahlian')->name('program-keahlian');
        Route::get('tugas-fungsi', 'tugas_fungsi')->name('tugas-fungsi');
        Route::get('profil-pemimpin', 'profil_pemimpin')->name('profil-pemimpin');
        Route::get('peta-sekolah', 'peta_sekolah')->name('peta-sekolah');
        Route::get('program-kerja', 'program_kerja')->name('program-kerja');
        Route::get('hubungan-industri', 'hubungan_industri')->name('hubungan-industri');
        Route::get('program-inovasi', 'program_inovasi')->name('program-inovasi');
        Route::get('unit-produksi', 'unit_produksi')->name('unit-produksi');
        Route::get('pengembangan-sekolah', 'pengembangan_sekolah')->name('pengembangan-sekolah');
        Route::get('kewirausahaan', 'kewirausahaan')->name('kewirausahaan');
        Route::get('jaringan', 'jaringan')->name('jaringan');
        Route::get('rpl', 'rpl')->name('rpl');
        Route::get('multimedia', 'multimedia')->name('multimedia');
        Route::get('otomotif', 'otomotif')->name('otomotif');
        Route::get('agenda-kegiatan', 'agenda_kegiatan')->name('agenda-kegiatan');
        Route::get('bursa-kerja', 'bursa_kerja')->name('bursa-kerja');
        Route::get('siswa-baru', 'siswa_baru')->name('siswa-baru');
        Route::get('ekskul', 'ekskul')->name('ekskul');
        Route::get('galeri-foto', 'galeri_foto')->name('galeri-foto');
        Route::get('galeri-video', 'galeri_video')->name('galeri-video');
        Route::get('hasil-karya', 'hasil_karya')->name('hasil-karya');
        Route::get('ebook', 'ebook')->name('ebook');
        Route::get('video-pembelajaran', 'video_pembelajaran')->name('video-pembelajaran');
        Route::get('informasi-pendidik', 'informasi_pendidik')->name('informasi-pendidik');
        Route::get('tenaga-kependidikan', 'tenaga_kependidikan')->name('tenaga-kependidikan');
        Route::get('prestasi-guru', 'prestasi_guru')->name('prestasi-guru');
        Route::get('prestasi-siswa', 'prestasi_siswa')->name('prestasi-siswa');
        Route::get('informasi-siswa', 'informasi_siswa')->name('informasi-siswa');
        Route::get('alumni', 'alumni')->name('alumni');
        Route::get('infrastruktur', 'infrastruktur')->name('infrastruktur');
        Route::get('sarana-belajar', 'sarana_belajar')->name('sarana-belajar');
        Route::get('sarana-olahraga', 'sarana_olahraga')->name('sarana-olahraga');
        Route::get('sarana-ibadah', 'sarana_ibadah')->name('sarana-ibadah');
        Route::get('kontak', 'kontak')->name('kontak');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
