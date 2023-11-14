<x-app>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Kontak</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="{{url('img/location.png')}}" alt="Icon">
                            </div>
                            <h6>Alamat</h6>
                            <span>{{$list_footer->alamat}}</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item d-block bg-light text-center rounded p-3">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="{{url('img/email.png')}}" alt="Icon">
                            </div>
                            <h6>Email</h6>
                            <span>{{$list_footer->email}}</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bg-light text-center rounded p-3">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="{{url('img/call.png ')}}" alt="Icon">
                            </div>
                            <h6>Telepon</h6>
                            <span>{{$list_footer->phone}}</span>
                        </div>
                    </a>
                </div>
            </div>
            <br><br>
        </div>
        <div class="container">
            {!!nl2br($footer->maps)!!}
        </div>
    </div>
    <!-- Category End -->
</x-app>
