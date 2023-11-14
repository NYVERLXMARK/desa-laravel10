<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                    <img src="http://kantorkite.ketapangkab.go.id/public/{{$informasi->foto}}" alt="foto" class="mx-auto d-block">
                    <hr>
                    <p>
                        <small><i class="fa fa-eye text-primary me-2"></i>{{$informasi->viewer}}</small> |
                        <small><i class="fa fa-calendar text-primary me-2"></i>{{$informasi->created_at->translatedFormat('d F Y')}}</small>
                    </p>
                    <h3>{{$informasi->judul_informasi}}</h3>
                    <p>
                        {!! nl2br($informasi->isi_informasi)!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</x-app>
