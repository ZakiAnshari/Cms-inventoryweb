<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>soFFer - Software Landing Page Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<style>
    .main .container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1rem;
    justify-content: center;
    align-items: center;
}
.main .card {
    color: #252a32;
    border-radius: 2px;
    background: #ffffff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
}
.main .card-image {
    position: relative;
    display: block;
    width: 100%;
    padding-top: 70%;
    background: #ffffff;
}
.main .card-image img {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media only screen and (max-width: 600px) {
    .main .container {
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 1rem;
    }
}
</style>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 style="font-size: 30px" class="m-0 ">Penyewaaan Pelaminan</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="/admin/login" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Pelaminan
                                <br>Murah, Terjamin, Aman
                            </h1>
                            <p class="text-white pb-3 animated slideInDown">Aneka Model & Ukuran Pelaminan dengan harga berbeda Mulai dari 1.500.000 s/d 5.000.000. untuk memastikan ketersediaannya silahkan hubunggi kami</p>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Masukkan Pesan" style="height: 58px;">
                                <button type="button" class="btn btn-primary rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">Kirim</button>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="{{ asset('frontend/img/1.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-edit text-primary mb-4"></i>
                            <h5 class="mb-3">Dapat Disesuaikan Sepenuhnya</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-sync text-primary mb-4"></i>
                            <h5 class="mb-3">Integrasi Aplikasi</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-draw-polygon text-primary mb-4"></i>
                            <h5 class="mb-3">Seret dan Lepas</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <section>
            <h1 class="list my-4 text-center" style="font-size: x-large;">GALLERY</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('frontend/img/1.jpeg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                <img width="100%" src="{{ asset('frontend/img/1.jpeg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('frontend/img/2.jpeg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                <img width="100%" height="268" src="{{ asset('frontend/img/2.jpeg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('frontend/img/3.jpeg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                <img width="100%" height="268" src="{{ asset('frontend/img/3.jpeg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('frontend/img/4.jpeg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                <img width="100%" height="auto" src="{{ asset('frontend/img/4.jpeg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <div class="card-image">
                                <a href="{{ asset('frontend/img/5.jpeg') }}" data-fancybox="gallery" data-caption="Caption Images 1">
                                <img width="100%" height="auto" src="{{ asset('frontend/img/5.jpeg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Start -->
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Kelola & Dorong Bisnis Anda Ke Tingkat Berikutnya</h1>
                        <p class="mb-4">Untuk melengkapi kebutuhan anda akan acara pernikahan anda, kami hadirkan pula direktori vendor yang berhubungan dengan pernikahan dan juga berbagai tulisan menarik tentang pernikahan.</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Fitur Website</h5>
                                <p class="mb-0">Banyak fitur yang dapat anda gunakan untuk mempercantik dan melengkapi informasi
                                    diwebsite pernikahan anda. Beberapa fasilitas-fasilitas yang tersedia antara lain</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Paket  Nikah</h5>
                                <p class="mb-0">Beberapa pilihan paket yang dapat anda gunakan, silahkan pilih sesuai dengan yang anda butuhkan
                                    Jangan ragu untuk bertanya kepada kami jika ingin lebih jelas</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="{{ asset('frontend/img/5.jpeg') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->




      

        <!-- Facts Start -->
        <div class="container-xxl bg-primary my-6 py-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-cogs fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">4</h1>
                        <p class="text-white mb-0">Active Install</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">2</h1>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">4</h1>
                        <p class="text-white mb-0">Award Wins</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-quote-left fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">1</h1>
                        <p class="text-white mb-0">Clients Reviews</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Get In Touch</h1>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Telepon</p>
                                <h5 class="mb-0">0823 6574 8983</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Email</p>
                                <h5 class="mb-0">penyewaanpelaminan@gmail.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Lokasi</p>
                                <h5 class="mb-0">Padang Sumatra Barat</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Masukkan Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Masukkan Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Tinggalkan Pesan disini" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">
                            Alamat<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Padang Sumatra Barat</p>
                        <p><i class="fa fa-phone-alt me-3"></i>0823 6574 8983</p>
                        <p><i class="fa fa-envelope me-3"></i>pelaminan@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">
                            Tautan Cepat<span></span></p>
                        <a class="btn btn-link" href="">Home</a>
                        <a class="btn btn-link" href="">About</a>
                        <a class="btn btn-link" href="">Contact</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Community<span></span></p>
                        <a class="btn btn-link" href="">Career</a>
                        <a class="btn btn-link" href="">Leadership</a>
                        <a class="btn btn-link" href="">Strategy</a>
                        <a class="btn btn-link" href="">History</a>
                        <a class="btn btn-link" href="">Components</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script>
        $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: false,
        protect: true
    });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    
</body>

</html>