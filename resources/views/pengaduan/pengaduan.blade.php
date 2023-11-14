<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Informasi Pengaduan</h1>
                    <p class="mb-4">{!!nl2br($pengaduan->isi)!!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-app>
