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
function encoding($text)
{
    return hash('sha256', $text);
}
Route::get('/', function () {
    return view('front.welcome');
});

    Route::controller(FrontController::class)->prefix(env('FRONT_PREFIX'))->group(function () {
        Route::get(encoding('sejarah'), 'sejarah')->name('sejarah');
        Route::get(encoding('timeline'), 'timeline')->name('timeline');
        Route::get(encoding('visimisi'), 'visimisi')->name('visimisi');
        Route::get(encoding('program-keahlian'), 'program_keahlian')->name('program-keahlian');
        Route::get(encoding('tugas-fungsi'), 'tugas_fungsi')->name('tugas-fungsi');
        Route::get(encoding('profil-pemimpin'), 'profil_pemimpin')->name('profil-pemimpin');
        Route::get(encoding('peta-sekolah'), 'peta_sekolah')->name('peta-sekolah');
        Route::get(encoding('program-kerja'), 'program_kerja')->name('program-kerja');
        Route::get(encoding('hubungan-industri'), 'hubungan_industri')->name('hubungan-industri');
        Route::get(encoding('program-inovasi'), 'program_inovasi')->name('program-inovasi');
        Route::get(encoding('unit-produksi'), 'unit_produksi')->name('unit-produksi');
        Route::get(encoding('pengembangan-sekolah'), 'pengembangan_sekolah')->name('pengembangan-sekolah');
        Route::get(encoding('kewirausahaan'), 'kewirausahaan')->name('kewirausahaan');
        Route::get(encoding('jaringan'), 'jaringan')->name('jaringan');
        Route::get(encoding('rpl'), 'rpl')->name('rpl');
        Route::get(encoding('multimedia'), 'multimedia')->name('multimedia');
        Route::get(encoding('otomotif'), 'otomotif')->name('otomotif');
        Route::get(encoding('agenda-kegiatan'), 'agenda_kegiatan')->name('agenda-kegiatan');
        Route::get(encoding('bursa-kerja'), 'bursa_kerja')->name('bursa-kerja');
        Route::get(encoding('siswa-baru'), 'siswa_baru')->name('siswa-baru');
        Route::get(encoding('ekskul'), 'ekskul')->name('ekskul');
        Route::get(encoding('galeri-foto'), 'galeri_foto')->name('galeri-foto');
        Route::get(encoding('galeri-video'), 'galeri_video')->name('galeri-video');
        Route::get(encoding('hasil-karya'), 'hasil_karya')->name('hasil-karya');
        Route::get(encoding('ebook'), 'ebook')->name('ebook');
        Route::get(encoding('video-pembelajaran'), 'video_pembelajaran')->name('video-pembelajaran');
        Route::get(encoding('informasi-pendidik'), 'informasi_pendidik')->name('informasi-pendidik');
        Route::get(encoding('tenaga-kependidikan'), 'tenaga_kependidikan')->name('tenaga-kependidikan');
        Route::get(encoding('prestasi-guru'), 'prestasi_guru')->name('prestasi-guru');
        Route::get(encoding('prestasi-siswa'), 'prestasi_siswa')->name('prestasi-siswa');
        Route::get(encoding('informasi-siswa'), 'informasi_siswa')->name('informasi-siswa');
        Route::get(encoding('alumni'), 'alumni')->name('alumni');
        Route::get(encoding('infrastruktur'), 'infrastruktur')->name('infrastruktur');
        Route::get(encoding('sarana-belajar'), 'sarana_belajar')->name('sarana-belajar');
        Route::get(encoding('sarana-olahraga'), 'sarana_olahraga')->name('sarana-olahraga');
        Route::get(encoding('sarana-ibadah'), 'sarana_ibadah')->name('sarana-ibadah');
        Route::get(encoding('kontak'), 'kontak')->name('kontak');
    });

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('galery-foto')->group(function(){
        Route::get('/', [App\Http\Controllers\GaleryFotoController::class, 'index'])->name('galery-foto');
        Route::post('/', [App\Http\Controllers\GaleryFotoController::class, 'store'])->name('galery-foto.create');
    });
});
Route::prefix('master')->group(function () {
    Route::group(['middleware' => ['auth', 'verified']], function () {
        Route::prefix('media-group')->group(function(){
            Route::get('/', [App\Http\Controllers\GroupMediaController::class, 'index'])->name('group-media');    
            Route::post('/', [App\Http\Controllers\GroupMediaController::class, 'store'])->name('group-media.post');    
            Route::get('/delete/{id}', [App\Http\Controllers\GroupMediaController::class, 'destroy'])->name('group-media.delete');    
            Route::get('/edit/{id}', [App\Http\Controllers\GroupMediaController::class, 'edit'])->name('group-media.edit');    
            Route::post('/update', [App\Http\Controllers\GroupMediaController::class, 'update'])->name('group-media.update');    
        });
        Route::prefix('banner')->group(function () {
            Route::get('/', [App\Http\Controllers\BannerController::class, 'index'])->name('banner'); 
        });
        
    });
});
