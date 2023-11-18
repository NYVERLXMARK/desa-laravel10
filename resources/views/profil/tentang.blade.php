<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Tentang Kami</h1>
                <hr>
                <p>{!!nl2br($footer->nama)!!}</p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <a href="http://kantorkite.ketapangkab.go.id/public/{{$tentang->foto}}" data-lightbox="gallery">
                            <img class="img-fluid w-100" src="http://kantorkite.ketapangkab.go.id/public/{{$tentang->foto}}" alt="Foto Tentang Desa">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">{!!nl2br($footer->nama)!!}</h1>
                    <p class="mb-4">{!!nl2br($tentang->tentang)!!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-app>
