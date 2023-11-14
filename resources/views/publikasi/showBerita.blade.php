<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                    <img src="http://kantorkite.ketapangkab.go.id/public/{{$berita->foto}}" alt="foto" class="mx-auto d-block" style="width: 100%; height: 100%x; object-fit: cover;">
                    <hr>
                    <p>
                        <small><i class="fa fa-eye text-primary me-2"></i>{{$berita->viewer}}</small>
                        <span class="mx-2"></span>
                        <small><i class="fa fa-calendar text-primary me-2"></i>{{$berita->created_at->translatedFormat('d F Y')}}</small>
                    </p>
                    <h3>{{$berita->judul}}</h3>
                    <p>
                        {!! nl2br($berita->isi)!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-app>
