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
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['timeline sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function tugas_fungsi()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['timeline sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function profil_pemimpin()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['timeline sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function peta_sekolah()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['timeline sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function program_kerja()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['timeline sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function hubungan_industri()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['timeline sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
    public function kontak()
    {
        $breadcrumb = new \stdClass();
        $breadcrumb->title = 'Sejarah Perkembangan Sekolah';
        $breadcrumb->image = '/assets/img/breadcrumb/bg-sejarah.jpg';
        $breadcrumb->link = [
            ['profile','#', 'fas fa-home', null],
            ['timeline sekolah','#',null,'active']
        ];
        return view('front.pages.timeline',compact('breadcrumb'));
    }
}
