<x-app>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Pertanyaan sering diajukan di {!!nl2br($tentang->judul)!!}</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        @foreach ($list_faq as $faq)
                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button">{{$faq->faq_pertanyaan}}</button>
                            </h2>
                            <div class="accordion-collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{$faq->faq_jawaban}}</div>
                            </div>
                        </div>
                        <!-- end of accordion-item -->
                        @endforeach
                    </div> <!-- end of accordion -->
                </div> <!-- end of col -->
            </div>
        </div>
    </div>
    <!-- Category End -->
    <script>
        const pertanyaan = document.querySelectorAll(".accordion-header");

        pertanyaan.forEach((elem) => {
            elem.addEventListener("click", function () {
                const jawaban = this.nextElementSibling;
                jawaban.classList.toggle("active");
            });
        });
    </script>
</x-app>
