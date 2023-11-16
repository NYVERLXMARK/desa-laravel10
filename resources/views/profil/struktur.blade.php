<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Struktur Organisasi</h1>
                <hr>
                <p>{!!nl2br($footer->nama)!!}</p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="http://kantorkite.ketapangkab.go.id/public/{{$profil->struktur_organisasi}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-app>
