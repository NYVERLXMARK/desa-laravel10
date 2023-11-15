<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="display-5 animated fadeIn mb-4">Informasi</h1>
                        <nav aria-label="breadcrumb animated fadeIn">
                            <ol class="breadcrumb text-uppercase">
                                <li class="breadcrumb-item"><a href="{{'/'}}">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="{{'/informasi'}}">Informasi</a></li>
                                <li class="breadcrumb-item text-body active" aria-current="page">{{$informasi->judul_informasi}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                    <img src="http://kantorkite.ketapangkab.go.id/public/{{$informasi->foto}}" alt="foto" class="mx-auto d-block" style="width: 100%; height: 100%x; object-fit: cover;">
                    <hr>
                    <p>
                        <small><i class="fa fa-eye text-primary me-2"></i>{{$informasi->viewer}}</small>
                        <span class="mx-2"></span>
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
