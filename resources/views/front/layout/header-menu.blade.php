<!-- Header 
============================================= -->
<header id="home">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>        
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/assets/img/al-amanah-logo-2.png" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Profile</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('sejarah')}}">Sejarah</a></li>
                            <li><a href="{{route('timeline')}}">Timeline Sekolah</a></li>
                            <li><a href="{{route('visimisi')}}">Visi Misi</a></li>
                            <li><a href="{{route('program-keahlian')}}">Program Keahlian</a></li>
                            <li><a href="{{route('tugas-fungsi')}}">Tugas dan Fungsi</a></li>
                            <li><a href="{{route('profil-pemimpin')}}">Profile Pemimpin</a></li>
                            <li><a href="{{route('peta-sekolah')}}">Peta Sekolah</a></li>
                            <li><a href="https://sekolah.data.kemdikbud.go.id/index.php/Chome/profil/B43878AF-23AE-4D54-A011-D34AE7F9A7B0" target="_blank">Kami di Kemendikbud</a></li>
                            <li><a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20614427" target="_blank">Refrensi Data</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Halaman</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Program Sekolah</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="{{route('program-kerja')}}">Program Kerja</a></li>
                                                <li><a href="{{route('hubungan-industri')}}">Hubungan Industri</a></li>
                                                <li><a href="{{route('program-inovasi')}}">Teaching Factory dan Program Inovasi</a></li>
                                                <li><a href="{{route('unit-produksi')}}">Program Bussiness Center (Unit Produksi)</a></li>
                                                <li><a href="{{route('pengembangan-sekolah')}}">Program Pengembangan Sekolah</a></li>
                                                <li><a href="{{route('kewirausahaan')}}">Program Kewirausahaan</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Konsentrasi Keahlian</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="{{route('jaringan')}}">System Informasi Jaringan dan Aplikasi</a></li>
                                                <li><a href="{{route('rpl')}}">Rekayasa Perangkat Lunak</a></li>
                                                <li><a href="{{route('multimedia')}}">Multimedia and Broadcasting</a></li>
                                                <li><a href="{{route('otomotif')}}">Otomotif</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Kegiatan Sekolah</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="{{route('agenda-kegiatan')}}">Agenda Kegiatan</a></li>
                                                <li><a href="{{route('bursa-kerja')}}">Bursa Kerja</a></li>
                                                <li><a href="{{route('siswa-baru')}}">Penerimaan Peserta Didik Baru</a></li>
                                                <li><a href="{{route('ekskul')}}">Ekstrakulikuler</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Galeri</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="{{route('galeri-foto')}}">Galeri Foto</a></li>
                                                <li><a href="{{route('galeri-video')}}">Galeri Video</a></li>
                                                <li><a href="{{route('hasil-karya')}}">Hasil Karya Siswa</a></li>
                                                <li><a href="{{route('ebook')}}">E-Book</a></li>
                                                <li><a href="{{route('video-pembelajaran')}}">Video Pembelajaran</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >GTK</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('informasi-pendidik')}}">Informasi Pendidik</a></li>
                            <li><a href="{{route('tenaga-kependidikan')}}">Tenaga Kependidikan</a></li>
                            <li><a href="{{route('prestasi-guru')}}">Prestasi Guru</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Siswa</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('prestasi-siswa')}}">Prestasi Siswa</a></li>
                            <li><a href="{{route('informasi-siswa')}}">Informasi Siswa</a></li>
                            <li><a href="{{route('alumni')}}">Alumni</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sarana dan Prasarana</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('infrastruktur')}}">Infrastruktur Sekolah</a></li>
                            <li><a href="{{route('sarana-belajar')}}">Sarana Pembelajaran</a></li>
                            <li><a href="{{route('sarana-olahraga')}}">Sarana Olahraga</a></li>
                            <li><a href="{{route('sarana-ibadah')}}">Sarana Ibadah</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('kontak')}}">Kontak</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->