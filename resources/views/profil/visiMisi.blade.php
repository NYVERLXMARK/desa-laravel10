<x-app>
    <!-- Visi dan Misi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Visi dan Misi</h1>
                <hr>
                <p>{!!nl2br($footer->nama)!!}</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                    <h3 class="mb-3 text-center">Visi</h3>
                        <p>{!!nl2br($visimisi->visi)!!}</p>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <h3 class="mb-3 text-center">Misi</h3>
                        <p>{!!nl2br($visimisi->misi)!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi dan Misi End -->
</x-app>
