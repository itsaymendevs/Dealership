{{-- hero --}}
<section id="hero--section" class="hero--section" style="padding-top: 90px" wire:ignore>


    {{-- hero-carousel --}}
    <div class="carousel slide carousel-fade hero--slider z--1" data-bs-ride="carousel" data-bs-pause="false"
        data-bs-keyboard="false" data-bs-touch="false" id="hero--slider">
        <div class="carousel-inner h-100">
            <div class="carousel-item active">
                <img class="w-100 d-block" src="{{ asset('assets/img/Hero/cover-2.jpg') }}" alt="Slide Image" />
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="{{ asset('assets/img/Hero/cover-2.jpg') }}" alt="Slide Image" />
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="{{ asset('assets/img/Hero/cover-2.jpg') }}" alt="Slide Image" />
            </div>
        </div>
    </div>

    {{-- hero-overlay --}}
    <div id="hero--overlay" class="hero--overlay z--1"></div>




    {{-- ------------------------------------------------------------ --}}





    {{-- filterTitle --}}
    <div class="text-center d-sm-none dream--button" data-aos='zoom-in' data-aos-duration="950" data-aos-delay="200">
        <a class="btn btn-success btn--regular py-2 px-3 mt-2" role="button" href="{{ route('website.stock') }}"
            style="border-radius: 60px"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                fill="currentColor" viewBox="0 0 16 16" class="bi bi-key me-2 fs-13 key--icon">
                <path
                    d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z">
                </path>
                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
            </svg>Find Your Dream Vehicle
        </a>
    </div>





    {{-- hero-content --}}
    <div class="container" id="hero--content">
        <div class="row mt-5 pt-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 d-sm-block position-relative">
                <div class="d-none d-sm-block overlay--blur z--1 rounded-1" id="form--overlay"></div>



                {{-- filter --}}
                <div class="d-none d-sm-block hero--search" data-aos='fade-up' data-aos-duration="950"
                    data-aos-delay="200">
                    <h3 class="text-center mb-4 pb-3 fw-bold">Search Inventory</h3>
                    <label class="form-label form--label">Vehicle Brand</label>


                    {{-- 1: brand --}}
                    <div class="select--single-wrapper mb-4">
                        <select class="form--select2 init--select" data-item='brandId'>
                            <option value=""></option>

                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach

                        </select>
                    </div>


                    {{-- manuf-year --}}
                    <label class="form-label form--label">Manufacture Year</label>
                    <div class="select--single-wrapper mb-4">
                        <select class="form--select2 init--select" data-item='manufactureYear'>
                            <option value=""></option>

                            @foreach ($years as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                            @endforeach

                        </select>
                    </div>


                    {{-- submitButton --}}
                    <div class="d-block text-center">
                        <button wire:click='searchVehicle' class="btn btn-dark btn--regular scale--3 py-2 px-3 mt-2"
                            type="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                fill="currentColor" viewBox="0 0 16 16" class="bi bi-search me-2">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg>Search
                        </button>
                    </div>
                </div>
                {{-- end filterWrap --}}
            </div>
        </div>
    </div>
    {{-- end heroContainer --}}









    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}


    @section('scripts')

    <script>
        // 1: select2 changeEvent
        $(".init--select").on("change", function (event) {


            // 1.1: getValue - formDataItem
            selectValue = event.target.value;
            formItem = $(this).attr('data-item');

            @this.set(formItem, selectValue);

        }); //end function

    </script>

    @endsection

    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}





</section>
{{-- end section --}}