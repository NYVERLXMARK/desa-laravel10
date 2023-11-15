<x-app>
    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <!-- Header Start -->
        {{-- <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Informasi</h1>
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="{{'/'}}">Beranda</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Informasi</li>
                        </ol>
                    </nav>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($informasi as $informasi)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="{{url('informasi', $informasi->id)}}"><img class="img-fluid" src="http://kantorkite.ketapangkab.go.id/public/{{$informasi->foto}}" alt="" style="width: 100%; height: 300px; object-fit: cover;"></a>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <a class="d-block h5 mb-2" href="{{url('informasi', $informasi->id)}}">{{$informasi->judul_informasi}}</a>
                                        <p></p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-eye text-primary me-2"></i>{{$informasi->viewer}}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>{{$informasi->created_at->translatedFormat('d F Y')}} WIB</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-arrow-right text-primary me-2"></i><a href="{{url('informasi', $informasi->id)}}">Baca Selengkapnya</a></small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Header End -->
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Informasi</h1>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($informasi as $informasi)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="{{url('informasi', $informasi->id)}}"><img class="img-fluid" src="http://kantorkite.ketapangkab.go.id/public/{{$informasi->foto}}" alt="" style="width: 100%; height: 300px; object-fit: cover;"></a>
                                </div>
                                <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2" href="{{url('informasi', $informasi->id)}}">{{$informasi->judul_informasi}}</a>
                                    <p></p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-eye text-primary me-2"></i>{{$informasi->viewer}}</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>{{$informasi->created_at->translatedFormat('d F Y')}} WIB</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-arrow-right text-primary me-2"></i><a href="{{url('informasi', $informasi->id)}}">Baca Selengkapnya</a></small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->
</x-app>
