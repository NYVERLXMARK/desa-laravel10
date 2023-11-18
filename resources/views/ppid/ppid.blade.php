<x-app>
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">PPID </h1>
                <hr>
                <p>{!!nl2br($footer->nama)!!}</p>
            </div>
            <div class="row g-5 align-items-center text-center">
                <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                    <p class="mb-4">{!!nl2br($ppid->deskripsi)!!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</x-app>
