<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                    <img src="http://kantorkite.ketapangkab.go.id/public/{{$artikel->foto}}" alt="foto" class="mx-auto d-block" style="width: 100%; height: 100%x; object-fit: cover;">
                    <hr>
                    <p>
                        <small><i class="fa fa-calendar text-primary me-2"></i>{{$artikel->created_at->translatedFormat('d F Y')}}</small>
                    </p>
                    <h3>{{$artikel->judul_artikel}}</h3>
                    <p>
                            {!! nl2br($artikel->isi_artikel)!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-app>
