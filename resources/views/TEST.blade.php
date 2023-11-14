<section class="hero-area-three">
    <div class="hero-slider-one">
        @foreach ($list_slider as $item)
            <div class="single-slider p-r z-1">
                <div class="image-layer bg_cover"
                    style="width: auto; height: 900px; overflow: hidden; background-image: url(http://kantorkite.ketapangkab.go.id/public/{{ $item['foto'] }}">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content text-white">
                                <h1 data-animation="fadeInUp" data-delay=".5s">{{ $item['judul'] }}</h1>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="hero-content text-white">
                                <span data-animation="fadeInUp" data-delay=".5s">{{ $item['deskripsi'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<div class="single-blog-style1 single-blog-style1--instyle3">
    <div class="single-blog-style1__inner">
        <div class="img-holder">
            <div class="inner" style="height: 400px; overflow: hidden;">
                <img src="http://kantorkite.ketapangkab.go.id/public/{{ $publikasi->foto }}"
                    alt=""  style="height: 100%; object-fit: cover;">
            </div>
        </div>
        <div class="text-holder">
            <ul class="meta-info">
                <li>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a>by {{ $opd->singkatan_website }}</a>
                </li>
                <li>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <a>{{ $publikasi->created_at->format('d F Y') }}</a>
                </li>
            </ul>
            <div class="text-inner">
                <h3 class="blog-title">{{ $publikasi->judul_publikasi }}</h3>
            </div>

        </div>
    </div>
</div>
