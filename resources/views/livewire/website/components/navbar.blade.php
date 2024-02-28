{{-- navbar --}}
<nav class="navbar navbar-light navbar-expand-md py-0 w-100 d-flex">
    <div class="container-fluid px-0">
        <div class="collapse navbar-collapse navbar--collapse" id="navcol-1">
            <div class="d-flex align-items-center flex-column h-100 justify-content-evenly">


                {{-- 1: Home --}}
                <a wire:navigate class="btn btn--navbar scale--4 mobile active" href="{{ route('website.home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                    <span>Home</span>
                </a>





                {{-- outStock --}}
                <a wire:navigate
                    class="btn btn--navbar scale--4 mobile {{ Request::is('stock') || Request::is('stock/*') ? 'active' : '' }}"
                    href="{{ route('website.stock') }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg><span>Our Stock</span></a>




                {{-- sell vehicle --}}
                <button
                    class="btn btn--navbar scale--4 mobile {{ Request::is('sell-vehicle') || Request::is('sell-vehicle/*') ? 'active' : '' }}"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg><span>Sell Vehicle</span></button>




                {{-- about --}}
                <a wire:navigate
                    class="btn btn--navbar scale--4 mobile {{ Request::is('about') || Request::is('about/*') ? 'active' : '' }}"
                    href="{{ route('website.about') }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg><span>About Us</span></a>



                {{-- reachUs --}}
                <button
                    class="btn btn--navbar scale--4 mobile {{ Request::is('reach-us') || Request::is('reach-us/*') ? 'active' : '' }}"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg><span>Reach Us</span>
                </button>


            </div>
        </div>
        {{-- end menu --}}





        {{-- -------------------------------------------------------- --}}
        {{-- -------------------------------------------------------- --}}






        {{-- MobileNavbar --}}
        <section id="navbar--section" class="navbar--section">
            <div class="container h-100">
                <div class="row g-0 align-items-center pulse animated h-100 w-100" style="width: 100% !important">


                    {{-- title --}}
                    <div class="col-8 col-md-12 col-xl-4 text-md-center text-xl-start">
                        <h1 class="logo-heading text--transparent stroke--gold-1">
                            DealerShip
                        </h1>
                    </div>



                    {{-- dropdownMenu --}}
                    <div class="col-4 text-end d-md-none">
                        <button data-bs-target="#navcol-1" data-bs-toggle="collapse"
                            class="navbar-toggler navbar--toggler">
                            <span class="visually-hidden">Toggle navigation</span><span
                                class="navbar-toggler-icon"></span>
                        </button>
                    </div>




                    {{-- menu --}}
                    <div class="col-12 col-xl-8 d-none d-md-block">
                        <div class="d-flex justify-content-between align-items-center">


                            {{-- home --}}
                            <a wire:navigate class="btn btn--navbar scale--4 active"
                                href="{{ route('website.home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" viewBox="0 0 16 16"
                                    class="bi bi-chevron-double-right">
                                    <path fill-rule="evenodd"
                                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg><span class="fs-5">Home</span></a>





                            {{-- outStock --}}
                            <a wire:navigate class="btn btn--navbar scale--4" href="{{ route('website.stock')}}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                                    <path fill-rule="evenodd"
                                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg><span>Our Stock</span></a>





                            {{-- sellVehicle --}}
                            <button class="btn btn--navbar scale--4" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                                    <path fill-rule="evenodd"
                                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg><span>Sell Vehicle</span></button>



                            {{-- aboutUs --}}
                            <a wire:navigate class="btn btn--navbar scale--4" href="{{ route('website.about') }}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                                    <path fill-rule="evenodd"
                                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg><span>About Us</span></a>



                            {{-- reachUs --}}
                            <button class="btn btn--navbar scale--4" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-chevron-double-right">
                                    <path fill-rule="evenodd"
                                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg><span>Reach Us</span>
                            </button>
                        </div>
                    </div>
                    {{-- endMenu --}}



                </div>
            </div>
            {{-- endRow --}}


            {{-- hr --}}
            <hr class="hero--hr" />

        </section>
    </div>
</nav>
{{-- end navbar --}}