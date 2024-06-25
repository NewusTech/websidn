<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Eternal Bliss Weddings</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-2">
                    <a href="/" class="navbar-brand">
                        @foreach ($logo as $logos)
                            @if ($logos->images)
                                <img src={{ asset('storage/' . $logos->images->path) }} class="img-fluid" style="width: 200px; height: 50px;" alt="Image">
                            @else
                                Gambar tidak tersedia
                            @endif
                        @endforeach
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/" class="nav-item nav-link fs-5">Beranda</a>
                            <a href="/service" class="nav-item nav-link fs-5">Layanan</a>
                            <a href="/gallery" class="nav-item nav-link fs-5">Galeri</a>
                            <a href="/portfolio" class="nav-item nav-link fs-5">Portofolio</a>
                            <a href="/about-us" class="nav-item nav-link fs-5">Tentang Kami</a>
                            <a href="/blog" class="nav-item nav-link fs-5">Artikel</a>
                        </div>
                        <a href="/contact-us" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Hubungi Kami</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid bg-light py-3 my-3 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Kontak Kami</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Kontak</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-2 wow bounceInUp text-center" data-wow-delay="0.1s">
            <div class="container">
                <div class="p-4 bg-light rounded contact-form">
                    <div class="row justify-content-center">
                        <div class="col-12 align-items-center">
                            {{-- <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small> --}}
                            <h4 class="display-7 mb-4">Hubungi Kami!</h4>
                            <p class="mb-4">Jika ada pertanyaan atau butuh informasi lebih lanjut mengenai layanan kami, jangan ragu menghubungi kami melalui kontak, email, atau telepon. Tim kami siap membantu dan memberikan solusi terbaik. Terima kasih atas kepercayaan Anda!</p>
                        </div>
                    </div>
                    <div class="row justify-content-between ">
                        @foreach ($contact as $kontak)
                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="card" >
                                <a href="#">
                                <img src="img/telepon.png" class="img-fluid my-2" height="100px" width="100px">
                                <div class="card-body text-center">
                                  <h4 class="card-title">Telepon</h4>
                                  <p class="text-dark">{{ $kontak->whatsapp }} </p>
                                </div></a>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="card" >
                                <a href="https://wa.me/{{ $kontak->whatsapp }}">
                                <img src="img/whatsapp.png" class="img-fluid my-2" height="100px" width="100px">
                                <div class="card-body text-center">
                                  <h4 class="card-title">Whatsapp</h4>
                                  <p class="text-dark">{{ $kontak->whatsapp }} </p>
                                </div></a>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-2" >
                            <div class="card">
                                <a href="{{ $kontak->instagram }}">
                                <img src="img/instagram.png" class="img-fluid my-2" height="100px" width="100px" >
                                <div class="card-body text-center">
                                  <h4 class="card-title">Instagram</h4>
                                  <p class="text-dark">{{ $kontak->instagram }} </p>
                                </div></a>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="card" >
                                <a href="{{ $kontak->facebook }}">
                                <img src="img/facebook.png" class="img-fluid my-2" height="100px" width="100px">
                                <div class="card-body text-center">
                                  <h4 class="card-title">Facebook</h4>
                                  <p class="text-dark">{{ $kontak->facebook }}</p>
                                </div></a>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="card" >
                                <a href="{{ $kontak->youtube }}">
                                <img src="img/youtube.png" class="img-fluid my-2" height="100px" width="100px">
                                <div class="card-body text-center">
                                  <h4 class="card-title">Youtube</h4>
                                  <p class="text-dark">{{ $kontak->youtube }} </p>
                                </div></a>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-6 mb-2" >
                            <div class="card">
                                <a href="{{ $kontak->tiktok }}">
                                <img src="img/tiktok.png" class="img-fluid my-2" height="100px" width="100px" >
                                <div class="card-body text-center">
                                  <h4 class="card-title">Tiktok</h4>
                                  <p class="text-dark">{{ $kontak->tiktok }} </p>
                                </div></a>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Back to Top -->
        @foreach ($contact as $kontak)
            <a href="https://wa.me/{{ $kontak->whatsapp }}?text=Halo,%20saya%20tertarik%20dengan%20layanan%20Anda." class="whatsapp-sticky">
                <i class="fab fa-whatsapp"></i>
            </a>
        @endforeach
        
        <!-- Google Maps Section -->
        <div class="map-container">
            {{-- @foreach ($contact as $kontak) --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7074.183936675103!2d-73.98354113874954!3d40.75243152133734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f7b6376d9b53%3A0xd27fd8e9d8b605d8!2sPerfect%20Wedding%20NYC!5e0!3m2!1sid!2sid!4v1719289912387!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <iframe src="{{ $kontak->map }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            {{-- @endforeach --}}
        </div>

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        Designed By <a class="border-bottom" href="https://websidn.com">Websidn</a> Distributed By <a class="border-bottom" href="">Newus Technology</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>