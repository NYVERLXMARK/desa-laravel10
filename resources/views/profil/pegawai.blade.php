<x-app>
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
</x-app>
