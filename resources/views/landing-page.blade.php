<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IAF | MSP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('../build/assets/assets/none.ico') }}" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('../build/assets/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('guess-layout.navbar')
        <!-- Hero-->
        @include('guess-layout.hero')
        <!-- About-->
        <div class="m-0 row d-flex h-75">
            <div class="col-md-6 d-flex flex-column">
                @include('guess-layout.about-iaf')
            </div>
            <div class="col-md-6 d-flex flex-column">
                @include('guess-layout.about-msp')
            </div>
        </div>

        <!-- Details-->
        @include('guess-layout.details')
        <!-- Portfolio-->
        @include('guess-layout.portfolio')
        <!-- To Site-->
        {{-- @include('guess-layout.to-site') --}}
        <!-- Contact-->
        @include('guess-layout.contact')
        <!-- Footer-->
        <footer class="py-5 bg-light">
            <div class="container px-4 px-lg-5"><div class="text-center small text-muted">{{ $siteSetting->footer_text }}</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('../build/assets/js/scripts.js') }}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
