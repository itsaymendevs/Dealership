{{-- reviews --}}
<section id="reviews--seciton" class="bg--cover"
    style="padding-top: 80px; padding-bottom: 120px; /*background-color: #e7e7e7;*/ background-image: url('assets/img/Backgrounds/plubs-gold.svg');">
    <div class="container">


        {{-- title / borders --}}
        <div class="row">
            <div class="col-12 position-relative">
                <h1 class="display-5 text-center heading-font mb-0" data-aos='flip-up' data-aos-delay="200"
                    data-aos-once="true">
                    Testimonials
                </h1>
            </div>
            <div class="col-12 position-relative mb-5 pb-1">
                <div class="d-flex justify-content-center align-items-center">
                    <hr class="hr--colored" style="border-color: var(--color-black)" />
                    <hr class="hr--colored" style="border-color: var(--bs-teal); width: 20%" />
                    <hr class="hr--colored" style="border-color: var(--bs-teal)" />
                </div>
            </div>
        </div>






        {{-- reviewsRow --}}
        <div class="row">
            <div class="col-12" data-aos='fade-up' data-aos-delay="200">


                {{-- carousel --}}
                <div class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false"
                    data-bs-keyboard="false" id="reviews--carousel">
                    <div class="carousel-inner">

                        {{-- singleReview --}}
                        <div class="carousel-item active">
                            <div class="row g-0 justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8">
                                    <div id="single--review-1" class="review--wrap scaleimg--2">
                                        <div class="d-flex align-items-sm-end mb-3 flex-column flex-sm-row">
                                            <img class="me-sm-4 mb-4 mb-sm-0"
                                                src="{{ asset('assets/img/Reviewers/4.jpg') }}" />
                                            <div class="d-block w-100">
                                                <h4 class="w-100 d-flex">Hazim Kamal Ali</h4>
                                                <p class="mb-0">General Manager at Truth Ltd</p>
                                            </div>
                                        </div>
                                        <p class="truncate-3l">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing
                                            elit. Doloribus ullam dolore, officia quod nisi
                                            aliquam nemo voluptas! Pariatur ipsum nihil saepe
                                            laudantium quibusdam similique vel!<br />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        {{-- singleReview --}}
                        <div class="carousel-item">
                            <div class="row g-0 justify-content-center">
                                <div class="col-12 col-md-10 col-lg-8">
                                    <div id="single--review-2" class="review--wrap scaleimg--2">
                                        <div class="d-flex align-items-sm-end mb-3 flex-column flex-sm-row">
                                            <img class="me-sm-4 mb-4 mb-sm-0"
                                                src="{{ asset('assets/img/Reviewers/4.jpg') }}" />
                                            <div class="d-block w-100">
                                                <h4 class="w-100 d-flex">Muhammed Yasir Ahmed</h4>
                                                <p class="mb-0">General Manager at Tesla</p>
                                            </div>
                                        </div>
                                        <p class="truncate-3l">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing
                                            elit. Doloribus ullam dolore, officia quod nisi
                                            aliquam nemo voluptas! Pariatur ipsum nihil saepe
                                            laudantium quibusdam similique vel!<br />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end carousel --}}


            </div>
        </div>
        {{-- endRow --}}


    </div>
</section>
{{-- end review --}}