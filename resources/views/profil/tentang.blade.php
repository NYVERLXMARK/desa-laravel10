<x-app>
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
</x-app>
