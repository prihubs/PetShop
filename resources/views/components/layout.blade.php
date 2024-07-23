
@php $ext = ''; @endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> {{ $sn }} - {{$title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{$site_description}}" name="keywords">
    <meta content="{{$site_description}}" name="description">

    <!-- Favicon -->
    <x-links rel="icon">{{$site_logo}}</x-links>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <x-links>lib/flaticon/font/flaticon.css</x-links>

    <!-- Libraries Stylesheet -->
    <x-links>lib/owlcarousel/assets/owl.carousel.min.css</x-links>

    <!-- Customized Bootstrap Stylesheet -->
    <x-links>css/bootstrap.min.css</x-links>

    <!-- Template Stylesheet -->
    <x-links>css/style.css</x-links>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>{{$site_address}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>{{$site_email}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>{{$site_phone}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="/" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i><x-image class="site-logo">{{$site_logo}}</x-image></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about{{$ext}}" class="nav-item nav-link">About</a>
                <a href="/services{{$ext}}" class="nav-item nav-link">Service</a>
                <a href="/product{{$ext}}" class="nav-item nav-link">Product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="/price{{$ext}}" class="dropdown-item">Pricing Plan</a>
                        <a href="/team{{$ext}}" class="dropdown-item">The Team</a>
                        <a href="/testimonial{{$ext}}" class="dropdown-item">Testimonial</a>
                        <a href="/blog{{$ext}}" class="dropdown-item">Blog Grid</a>
                        <a href="/detail{{$ext}}" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="/contact{{$ext}}" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    

        {{ $slot }}

    
    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-4"> No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor </p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>{{$site_address}}</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>{{$site_email}} </p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i> {{$site_phone}} </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">

                        @php $ft_class2 = "bi bi-arrow-right text-primary me-2"; $ft_class3 = "text-body mb-2"  @endphp

                        <a class="{{$ft_class3}}" href="/"><i class="{{$ft_class2}}"></i>Home</a>
                        <a class="{{$ft_class3}}" href="about{{$ext}}"><i class="{{$ft_class2}}"></i>About Us</a>
                        <a class="{{$ft_class3}}" href="services{{$ext}}"><i class="{{$ft_class2}}"></i>Our Services</a>
                        <a class="{{$ft_class3}}" href="team{{$ext}}"><i class="{{$ft_class2}}"></i>Meet The Team</a>
                        <a class="{{$ft_class3}}" href="blog{{$ext}}"><i class="{{$ft_class2}}"></i>Latest Blog</a>
                        <a class="text-body" href="#"><i class="{{$ft_class2}}"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Popular Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="{{$ft_class3}}" href="/"><i class="{{$ft_class2}}"></i>Home</a>
                        <a class="{{$ft_class3}}" href="about{{$ext}}"><i class="{{$ft_class2}}"></i>About Us</a>
                        <a class="{{$ft_class3}}" href="services{{$ext}}"><i class="{{$ft_class2}}"></i>Our Services</a>
                        <a class="{{$ft_class3}}" href="team{{$ext}}"><i class="{{$ft_class2}}"></i>Meet The Team</a>
                        <a class="{{$ft_class3}}" href="blog{{$ext}}"><i class="{{$ft_class2}}"></i>Latest Blog</a>
                        <a class="text-body" href="#"><i class="{{$ft_class2}}"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Newsletter</h5>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Your Email">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 text-center text-body">
                    <a class="text-body" href="">Terms & Conditions</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Privacy Policy</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Customer Support</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Payments</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Help</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">FAQs</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">{{$sn}}</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white" href="prihubs.com.ng">Prihubs</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <x-script>lib/easing/easing.min.js</x-script>
    <x-script>lib/waypoints/waypoints.min.js</x-script>
    <x-script>lib/owlcarousel/owl.carousel.min.js</x-script>

    <!-- Template Javascript -->
    <x-script>js/main.js</x-script>
    <x-script>js/jquery-3.7.1.min.js</x-script>
</body>

</html>