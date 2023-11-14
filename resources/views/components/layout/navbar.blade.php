<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="{{url('img/ktp.png')}}" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 text-primary">Desa</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{url('/')}}" class="nav-item nav-link active">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ url('tentang') }}" class="dropdown-item">Tentang Desa</a>
                        <a href="{{url('visi-dan-misi')}}" class="dropdown-item">Visi dan Misi</a>
                        <a href="{{url('maklumat')}}" class="dropdown-item">Maklumat</a>
                        <a href="{{url('selayang-pandang')}}" class="dropdown-item">Selayang Pandang</a>
                        <a href="{{url('struktur-organisasi')}}" class="dropdown-item">Struktur Organisasi</a>
                        <a href="{{url('pegawai-opd')}}" class="dropdown-item">Pegawai OPD</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Publikasi</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{url('berita')}}" class="dropdown-item">Berita</a>
                        <a href="{{url('artikel')}}" class="dropdown-item">Artikel</a>
                        <a href="{{url('standar-pelayanan')}}" class="dropdown-item">Standar Pelayanan</a>
                        <a href="{{url('service-delivery')}}" class="dropdown-item">Service Delivery</a>
                        <a href="{{url('dokumen-publik')}}" class="dropdown-item">Dokumen Publik</a>
                        <a href="{{url('dokumen-kinerja')}}" class="dropdown-item">Dokumen Kinerja</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ruang Publik</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{url('http://bit.ly/SKMKetapang')}}" class="dropdown-item" target="_blank">Kuesioner SKM</a>
                        <a href="{{url('laporan-skm')}}" class="dropdown-item">Laporan SKM</a>
                        <a href="{{url('laporan-tindak-lanjut-skm')}}" class="dropdown-item">Laporan Tindak Lanjut SKM</a>
                    </div>
                </div>
                <a href="{{url('ppid')}}" class="nav-item nav-link">PPID</a>
                <a href="{{url('informasi')}}" class="nav-item nav-link">Informasi</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Galeri</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{url('galeri-foto')}}" class="dropdown-item">Galeri Foto</a>
                        <a href="{{url('galeri-video')}}" class="dropdown-item">Galeri Video</a>
                    </div>
                </div>
                <a href="{{url('kontak')}}" class="nav-item nav-link">Kontak</a>
                <a href="{{url('faq')}}" class="nav-item nav-link">FAQ</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pengaduan</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{url('https://www.lapor.go.id/instansi/pemerintah-kabupaten-ketapang')}}" class="dropdown-item" target="_blank">SP4N Lapor</a>
                        <a href="{{url('informasi-pengaduan')}}" class="dropdown-item">Informasi Pengaduan</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
