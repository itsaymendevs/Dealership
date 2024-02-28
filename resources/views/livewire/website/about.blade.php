{{-- section --}}
<section id="feature--section" class="section--spacing bg--cover first--section"
    style="background-image: url({{ asset('assets/img/Backgrounds/whitegrey.svg') }});">
    <div class="container z-1">
        <div class="row align-items-center">


            {{-- heading --}}
            <div class="col-12 position-relative">
                <h1 class="display-6 text-center heading-font mb-0" data-aos="flip-up" data-aos-delay="200"
                    data-aos-once="true">About Us</h1>
            </div>

            {{-- hr --}}
            <div class="col-12 position-relative mb-4 pb-3">
                <div class="d-flex justify-content-center align-items-center">
                    <hr class="hr--colored" style="border-color: var(--color-black);">
                    <hr class="hr--colored" style="border-color: var(--bs-teal);width: 3%;">
                    <hr class="hr--colored" style="border-color: var(--bs-teal);width: 3%;">
                </div>
            </div>



            {{-- ------------------------------------------ --}}
            {{-- ------------------------------------------ --}}




            {{-- logo --}}
            <div class="col-12 col-lg-5 text-center" data-aos="fade-right" data-aos-delay="150">
                <img src="{{ asset('assets/img/Logo/logo-crop.png') }}" style="width: 100%;object-fit: contain;">
            </div>



            {{-- rightCol --}}
            <div class="col-12 col-lg-7" style="border-left: 2px solid var(--bg-theme-dark);border-radius: 2px;">




                <div class="w-100 px-2 px-lg-4 my-2 scale--3 mt-5 mt-lg-0">

                    {{-- subheading --}}
                    <h5 class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-info-circle-fill fs-4 fill--green me-3">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z">
                            </path>
                        </svg>About Dealership
                    </h5>


                    {{-- paragraph --}}
                    <p>Iusto autem quae itaque cum quidem eius incidunt animi, quia veniam illo, dolore aliquid tempore
                        perspiciatis nulla laboriosam corporis. Eum<br></p>

                    <hr class="mt-4 mb-4" style="border-color: #d1d1d1;">


                    {{-- contacts --}}
                    <h5 class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-envelope fs-4 fill--green me-3">
                            <path fill-rule="evenodd"
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                            </path>
                        </svg>Email Address
                    </h5>

                    <p class="mb-1">sales@dealership.sa<br></p>
                    <p class="mb-4">support@dealership.sa<br></p>


                    <h5 class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-telephone-outbound fs-4 fill--green me-3">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z">
                            </path>
                        </svg>Our Contacts
                    </h5>
                    <p class="mb-1">+ 971 55 182853<br></p>
                    <p class="mb-0">+ 971 66 258510<br></p>

                </div>
            </div>
        </div>
    </div>
</section>
{{-- endSection --}}