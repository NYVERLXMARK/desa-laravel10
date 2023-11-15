<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$footer->alamat}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$footer->phone}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$footer->email}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.x.com/nyverl/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/RNGlory.ID" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@N0tMucH" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in" target="_blank"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Link Terkait</h5>
                <a class="btn btn-link text-white-50" href="https://ketapangkab.go.id/" target="_blank">Portal Ketapang</a>
                <a class="btn btn-link text-white-50" href="http://sintari.ketapangkab.go.id/" target="_blank">SINTARI</a>
                <a class="btn btn-link text-white-50" href="http://kantorkite.ketapangkab.go.id/" target="_blank">Kantor Kite</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Galeri Foto</h5>
                <div class="row g-2 pt-2">
                    @foreach ($galeri as $item)
                    <div class="col-4">
                        <a href="{{url('galeri-foto')}}"><img class="img-fluid rounded bg-light p-1" src="http://kantorkite.ketapangkab.go.id/public/{{$item->foto}}" alt="" style="width: 100%; height:100px"></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span><strong>Copyright &copy; 2023 @if(date("Y") > '2023') - {{date("Y")}} @endif by <a href="https://www.instagram.com/nyverl/" target="_blank"> Nur Rahman</a></strong></span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{url('/')}}">Beranda</a>
                        <a href="{{url('tentang')}}">Tentang Desa</a>
                        <a href="{{url('kontak')}}">Kontak</a>
                        <a href="{{url('faq')}}">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
