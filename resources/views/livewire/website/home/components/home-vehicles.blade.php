{{-- vehicles --}}
<section id="feature--section" class="section--spacing bg--cover"
    style="background-image: url('assets/img/Backgrounds/whitegrey.svg')">
    <div class="container">



        {{-- row --}}
        <div class="row">
            <div class="col-12 position-relative">
                <h1 class="display-5 text-center heading-font mb-0" data-aos='flip-up' data-aos-delay="200"
                    data-aos-once="true">
                    Featured Vehicles
                </h1>
            </div>
            <div class="col-12 position-relative mb-5 pb-4">
                <div class="d-flex justify-content-center align-items-center">
                    <hr class="hr--colored" style="border-color: var(--color-black)" />
                    <hr class="hr--colored" style="border-color: var(--color-black)" />
                    <hr class="hr--colored" style="border-color: var(--color-black)" />
                    <hr class="hr--colored" style="border-color: var(--bs-teal); width: 3%" />
                </div>
            </div>
        </div>
        {{-- end row --}}






        {{-- vehiclesRow --}}
        <div class="row justify-content-center">



            {{-- singleVehicle --}}
            <div wire:ignore class="col-12 col-sm-10 col-md-6 col-lg-4 ">
                <div class="feature--card feature--card-hover" data-aos='zoom-in' data-aos-delay="200">


                    {{-- whatsappLink --}}
                    <a class="btn btn-success btn--regular scale--3 btn--order mb-2" role="button" href="#"
                        style="border: none; border-bottom: 2px solid var(--bs-warning); border-radius: 1px;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-whatsapp fs-5 me-2">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                            </path>
                        </svg>Get Vehicle
                    </a>


                    {{-- imageFile --}}
                    <img src="{{ asset('assets/img/Featured/audi.jpg') }}" />


                    {{-- manuf-year / hybird --}}
                    <div class="feature--card-content scale--4">
                        <div class="d-flex align-items-center justify-content-around mb-3">

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-speedometer2 fs-5 me-2" style="margin-bottom: 2px">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                                    <path fill-rule="evenodd"
                                        d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3" />
                                </svg>
                                <span class="fw-semibold fs-13 ">70,250 km</span>
                            </div>



                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-pin-map-fill fs-5 me-2" style="margin-bottom: 2px">
                                    <path fill-rule="evenodd"
                                        d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z" />
                                    <path fill-rule="evenodd"
                                        d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                                </svg>
                                <span class="fw-semibold fs-13 ">Saskatoon, SK</span>
                            </div>

                        </div>





                        {{-- name --}}
                        <h5 class="text-center fw-semibold mb-3">
                            <strong>Audi R8</strong>
                            <span class="fw-bold fs-12 text--green ">(2023)</span>
                        </h5>


                        {{-- description --}}
                        <p class="text-center fs-15">
                            Resilient from the ground up.
                        </p>



                        {{-- price / viewButton --}}
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="feature--price">120,000<small class="fs-10 ms-1">SAR</small></span>

                            {{-- viewButton --}}
                            <a class="btn btn--regular fs-13 fw-semibold scale--3 mb-2 pb-1" role="button"
                                href="vehicle.html">Check Vehicle<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" viewBox="0 0 16 16"
                                    class="bi bi-chevron-double-right ms-1 fs-12">
                                    <path fill-rule="evenodd"
                                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            {{-- end singleVehicle --}}





            {{-- ------------------------------------------------ --}}
            {{-- ------------------------------------------------ --}}



            {{-- empty --}}
            <div class="col-12"></div>

            {{-- MessageUs --}}
            <div class="col-12 col-sm-6 col-md-4 text-center text-sm-start">
                <button class="btn btn-success btn--regular scale--3 py-2 px-3 mt-2" data-aos='fade'
                    data-aos-delay="150" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-whatsapp fs-4 me-2">
                        <path
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                        </path>
                    </svg>Message Us
                </button>
            </div>




            {{-- viewStock --}}
            <div class="col-12 col-sm-6 col-md-4 text-center">
                <a class="btn btn-dark btn--regular scale--3 py-2 px-3 mt-2" role="button" data-aos='fade'
                    data-aos-delay="150" href="stock.html">View Stock<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                        height="1em" fill="currentColor" viewBox="0 0 16 16"
                        class="bi bi-chevron-double-right ms-2 fs-13">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                </a>
            </div>




            {{-- empty --}}
            <div class="col-12 col-sm-6 col-md-4 text-center"></div>


        </div>
    </div>
</section>
{{-- end section --}}