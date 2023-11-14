<x-app>
    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Galeri Video</h1>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($list_vidio as $vidio)
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <iframe src="https://www.youtube.com/embed/{{$vidio->link}}" frameborder="0" style="width: 100%; height: 400px; object-fit: cover;"></iframe>
                                </div>
                                {{-- <div class="p-4 pb-0">
                                    <a class="d-block h5 mb-2" href="">{{$vidio->judul}}</a>
                                    <p></p>
                                </div> --}}
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar text-primary me-2"></i>{{$vidio->created_at->translatedFormat('d F Y')}}</small>
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
