<x-app>
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Selamat Datang di Website Resmi <span class="text-primary">{!!($tentang->judul)!!}</span></h1>
                <p class="animated fadeIn mb-4 pb-2">{{$list_footer->alamat}}</p>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    @foreach ($list_slider as $slider)
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="http://kantorkite.ketapangkab.go.id/public/{{$slider->foto}}" alt="" style="height: 700px;">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">{!!($tentang->judul)!!}</h1>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="http://kantorkite.ketapangkab.go.id/public/{{$tentang->foto}}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">{!!nl2br($tentang->judul)!!}</h1>
                    <p class="mb-4">{!!nl2br($tentang->tentang)!!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Visi dan Misi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Visi dan Misi</h1>
                <p>{!!nl2br($visimisi->judul)!!}</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                    <h3 class="mb-3 text-center">Visi</h3>
                        <p>{!!nl2br($visimisi->visi)!!}</p>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <h3 class="mb-3 text-center">Misi</h3>
                        <p>{!!nl2br($visimisi->misi)!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi dan Misi End -->

    <!-- Pegawai Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Pegawai OPD</h1>
            </div>
            <div class="row g-4">
                @foreach ($list_pegawai as $pegawai)

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{$pegawai->pegawai_gambar}}" alt="" style="width: 100%; height: 400px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">{{$pegawai->nama}}</h5>
                            <small>{{$pegawai->jabatan}}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pegawai End -->

    <!-- Lokasi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Lokasi</h1>
                <p>{!!nl2br($visimisi->judul)!!}</p>
            </div>
            {!!nl2br($footer->maps)!!}
        </div>
    </div>
    <!-- Lokasi End -->

    <!-- Berita Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Berita Terbaru</h1>
                <p>{!!nl2br($visimisi->judul)!!}</p>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($list_berita as $berita)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="{{url('berita', $berita->id)}}"><img class="img-fluid" src="http://kantorkite.ketapangkab.go.id/public/{{$berita->foto}}" alt="" style="width: 100%; height: 300px; object-fit: cover;"></a>
                                </div>
                                <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2" href="{{url('berita', $berita->id)}}">{{$berita->judul}}</a>
                                    <p></p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-eye text-primary me-2"></i>{{$berita->viewer}}</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>{{$berita->created_at->translatedFormat('d F Y')}}</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-arrow-right text-primary me-2"></i><a href="{{url('berita', $berita->id)}}">Baca Selengkapnya</a></small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Berita End -->
</x-app>
