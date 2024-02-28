<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

        {{-- title --}}
        <title>Dealership</title>


        {{-- appIcon --}}
        <link rel="apple-touch-icon" type="image/png" sizes="180x180"
            href="{{ asset('assets/img/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="180x180" href="{{ asset('assets/img/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="384x384" href="{{ asset('assets/img/favicon-32x32.png') }}" />



        {{-- bootstrap / fontFamily --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic-ext,cyrillic,latin-ext,vietnamese&amp;display=swap" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800&amp;display=swap" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />




        {{-- stylesheets --}}
        <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/hero.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/scroll.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/select2-custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/vehicle.css') }}" />


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>




        {{-- :: livewireStyles --}}
        @livewireStyles

    </head>







    {{-- ----------------------------------------------------------------- --}}
    {{-- ----------------------------------------------------------------- --}}






    <body>






        {{-- :: floatingWhatsapp --}}
        <livewire:website.components.floating-whatsapp />




        {{-- ----------------------------------------------------------- --}}





        {{-- :: Navbar --}}
        @if ((Request::is('/')))
        <livewire:website.components.navbar />
        @else
        <livewire:website.components.navbar-dark />
        @endif







        {{-- ----------------------------------------------------------- --}}





        {{-- :: Content --}}
        {{ $slot }}





        {{-- ----------------------------------------------------------- --}}





        {{-- :: Footer --}}
        <livewire:website.components.footer />






        {{-- ---------------------------------------------------------- --}}
        {{-- ---------------------------------------------------------- --}}





        {{-- scripts --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" navigate-only-once>
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="assets/js/select2.min.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="assets/js/init-navbar.js"></script>
        <script src="assets/js/init.js"></script>
        <script src="assets/js/re-init.js"></script>






        {{-- :: livewireScripts --}}
        @livewireScripts



        @yield('scripts')




    </body>
</html>