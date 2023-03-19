<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function sejarah()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['sejarah','#',null,'active']
        ];
        return view('front.pages.sejarah',compact('breadcrumb'));
    }
    public function timeline()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-2.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['timeline sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function visimisi()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Visi & Misi';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-3.png';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['Visi Misi','#',null,'active']
        ];
        return view('front.pages.visimisi',compact('breadcrumb'));
    }
    public function program_keahlian()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Program Keahlian SMK';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-4.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['Program Keahlian','#',null,'active']
        ];
        return view('front.pages.program-keahlian',compact('breadcrumb'));
    }
    public function tugas_fungsi()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Tugas dan Fungsi';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-2.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['tugas dan fungsi','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function profil_pemimpin()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Profil Pemimpin';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-3.png';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['Profil pemimpin','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function peta_sekolah()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Denah Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['peta sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    // halaman
    public function program_kerja()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Program Kerja';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Program sekolah','#',null,null],
            ['program kerja','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function hubungan_industri()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Hubungan Industri';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Program sekolah','#',null,null],
            ['hubungan industri','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function program_inovasi()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Inovasi Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Program sekolah','#',null,null],
            ['Teaching Factory dan Program Inovasi','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function unit_produksi()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Unit Produksi';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Program sekolah','#',null,null],
            ['Program Bussiness Center (Unit Produksi)','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function pengembangan_sekolah()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Pengembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Program sekolah','#',null,null],
            ['Program Pengembangan Sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function kewirausahaan()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Kewirausahaan';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Program sekolah','#',null,null],
            ['Program Kewirausahaan Sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function jaringan()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Jaringan Komputer';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Konsentrasi Keahlian','#',null,null],
            ['System Informasi Jaringan dan Aplikasi','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function rpl()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'RPL';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Konsentrasi Keahlian','#',null,null],
            ['Rekayasa Perangkat Lunak','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function multimedia()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Multimedia';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Konsentrasi Keahlian','#',null,null],
            ['Multimedia and Broadcasting','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function otomotif()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Otomotif';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Konsentrasi Keahlian','#',null,null],
            ['Otomotif','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function agenda_kegiatan()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Agenda Kegiatan';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Kegiatan Sekolah','#',null,null],
            ['Agenda Kegiatan','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function bursa_kerja()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Kegiatan Sekolah','#',null,null],
            ['Bursa Kerja','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function siswa_baru()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Peserta Didik Baru';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Kegiatan Sekolah','#',null,null],
            ['Penerimaan Peserta Didik Baru','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function ekskul()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Ekskul';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Kegiatan Sekolah','#',null,null],
            ['Ekstrakulikuler','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function galeri_foto()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Galeri','#',null,null],
            ['Koleksi Foto','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function galeri_video()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Galery Video';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Galeri','#',null,null],
            ['Galeri Video','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function hasil_karya()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Hasil Karya';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Galeri','#',null,null],
            ['Hasil Karya Siswa','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function ebook()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Koleksi E-Book';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Galeri','#',null,null],
            ['ebook','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function video_pembelajaran()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Video Pembelajaran';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['halaman','#', 'fas fa-home', null],
            ['Galeri','#',null,null],
            ['video pembelajaraan','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function informasi_pendidik()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Informasi Pendidik';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['GTK','#', 'fas fa-home', null],
            ['informasi pendidik','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function tenaga_kependidikan()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Tenaga kependidikan';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['GTK','#', 'fas fa-home', null],
            ['tenaga kependidikan','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function prestasi_guru()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Prestasi Guru';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['GTK','#', 'fas fa-home', null],
            ['prestasi guru','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function prestasi_siswa()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Prestasi Siswa';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['siswa','#', 'fas fa-home', null],
            ['prestasi siswa','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function informasi_siswa()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Informasi Siswa';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['siswa','#', 'fas fa-home', null],
            ['Informasi Siswa','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function alumni()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Alumni Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['siswa','#', 'fas fa-home', null],
            ['Alumni','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function infrastruktur()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Infrastruktur Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['sarana dan prasarana','#', 'fas fa-home', null],
            ['infrastruktur sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function sarana_belajar()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'sarana pembelajaran';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['sarana dan prasarana','#', 'fas fa-home', null],
            ['sarana pembelajaran','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function sarana_olahraga()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sarana Olahraga';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['sarana dan prasarana','#', 'fas fa-home', null],
            ['sarana olahraga','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function sarana_ibadah()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sarana Ibadah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['sarana dan prasarana','#', 'fas fa-home', null],
            ['sarana ibadah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    
    public function kontak()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Kontak';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['Kontak','#', 'fas fa-home', null],
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
}
