<x-app>
    <!-- About Start -->
    <div class="container-xxl py-5">
        {{-- <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Artikel</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="{{'/'}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{'/artikel'}}">Artikel</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">{{$artikel->judul_artikel}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="display-5 animated fadeIn mb-4">Artikel</h1>
                        <nav aria-label="breadcrumb animated fadeIn">
                            <ol class="breadcrumb text-uppercase">
                                <li class="breadcrumb-item"><a href="{{'/'}}">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="{{'/artikel'}}">Artikel</a></li>
                                <li class="breadcrumb-item text-body active" aria-current="page">{{$artikel->judul_artikel}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
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
