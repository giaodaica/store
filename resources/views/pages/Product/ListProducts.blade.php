<style>
    .client-images img{
        max-height: none !important;
        border-radius: 5px;
    }
    .carousel-fade .carousel-item {
    transition: opacity 0.5s ease-in-out !important;
}
@media (min-width: 1200px) {
    .col-xl-3 {
        width: 100% !important;
    }
}


</style>
<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Giao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('build/assets/images/favicon.ico') }}">

    <!--Swiper slider css-->
    <link href="{{ asset('build/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- glightbox css -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/glightbox/css/glightbox.min.css') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('build/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('build/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('build/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('build/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('build/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('build/assets/images/logo-dark.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                    <img src="{{ asset('build/assets/images/logo-light.png') }}" class="card-logo card-logo-light" alt="logo light" height="17">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link active" href="#hero">Trang Trủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Tính năng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#plans">Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop">Cửa hàng</a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="auth-signin-basic.html" class="btn btn-link fw-medium text-decoration-none text-body">Sign in</a>
                        <a href="auth-signup-basic.html" class="btn btn-primary">Sign Up</a>
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start hero section -->
        <section class="section pb-0 hero-section" id="hero">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center mt-lg-5 pt-5">
                            <h1 class="display-6 fw-semibold mb-3 lh-base"><span class="text-success"> </span></h1>
                        </div>


                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">

                    </g>
                </svg>
            </div>
            <!-- end shape -->
        </section>
        <!-- end hero section -->
        <!-- left offcanvas -->


{{-- start section products --}}

<section class="section" id="contact">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">

                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row gy-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="card-body">
                            <div class="row">
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Bộ Lọc</button>
                                </div>
                                <div class="col-lg-12">

                                    <div class="row gallery-wrapper">
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development" data-color="blue">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Áo Thun Tay Ngắn</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">Giá <a href="" class="text-body text-truncate">{{ number_format(150000)}}</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Working at a coffee shop</h5>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Nancy Martino</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.2K
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.1K
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project development" data-category="development">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Photo was taken in Beach</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Elwood Arter</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.1K
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1K
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Drawing a sketch</h5>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Jason McQuaid</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 825
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 101
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Working from home little spot</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Henry Baird</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 632
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 95
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Project discussion with team</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Erica Kernan</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Sunrise above a beach</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">James Ballard</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 735
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 150
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Glasses and laptop from above</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Ruby Griffin</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 1.5k
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 250
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Dramatic clouds at the Golden Gate Bridge</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Ron Mackie</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing" data-category="project designing">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Fun day at the Hill Station</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Henry Baird</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 632
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 95
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">Cycling in the countryside</h5>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Nancy Martino</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.2K
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.1K
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 photography" data-category="photography">
                                            <div class="gallery-box card">
                                                <div class="gallery-container">
                                                    <a class="image-popup" href="{{ asset('build/assets/images/products/img-1.png') }}" title="">
                                                        <img class="gallery-img img-fluid mx-auto" src="{{ asset('build/assets/images/products/img-1.png') }}" alt="" />
                                                        <div class="gallery-overlay">
                                                            <h5 class="overlay-caption">A mix of friends and strangers heading off to find an adventure.</h5>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="box-content">
                                                    <div class="d-flex align-items-center mt-1">
                                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Erica Kernan</a></div>
                                                        <div class="flex-shrink-0">
                                                            <div class="d-flex gap-3">
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                                </button>
                                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3k
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                  <!-- Pagination Alignment -->

    <!-- Center Alignment -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Quay Lại</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Tiếp Theo</a>
            </li>
        </ul>
    </nav>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- ene card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </section>
    {{-- end section product --}}
<!-- Placement Offcanvas -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasLeftLabel">Offcanvas Left</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">



                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex mb-3">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-16">Filters</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a class="text-decoration-underline" id="clearall">Clear All</a>
                                    </div>
                                </div>

                                <div class="filter-choices-input">
                                    <input class="form-control" data-choices data-choices-removeItem type="text" id="filter-choices-input" value="T-Shirts" />
                                </div>
                            </div>

                            <div class="accordion accordion-flush filter-accordion">

                                <div class="card-body border-bottom">
                                    <div>
                                        <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Products</p>
                                        <div class="list-group filter-group categories-filter" data-type="category" >
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="*" checked>
                                               Tất cả sản phẩm
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=".project">
                                                project
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=".designing">
                                                designing
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=".photography">
                                                photography
                                            </label>
                                            <label class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=".development">
                                                development
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body border-bottom">
                                    <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Giá</p>

                                    <div id="product-price-range"></div>
                                    <div class="list-group">
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Declined Payment
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" checked>
                                            Delivery Error
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" checked>
                                            Wrong Amount
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Wrong Address
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Wrong UX/UI Solution
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body border-bottom">
                                    <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Giá</p>

                                    <div id="product-price-range"></div>
                                    <div class="list-group">
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Declined Payment
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" checked>
                                            Delivery Error
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" checked>
                                            Wrong Amount
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Wrong Address
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Wrong UX/UI Solution
                                        </label>
                                    </div>
                                </div><div class="card-body border-bottom">
                                    <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Giá</p>

                                    <div id="product-price-range"></div>
                                    <div class="list-group">
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Declined Payment
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" checked>
                                            Delivery Error
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="" checked>
                                            Wrong Amount
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Wrong Address
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="checkbox" value="">
                                            Wrong UX/UI Solution
                                        </label>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingBrands">
                                        <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands" aria-expanded="true" aria-controls="flush-collapseBrands">
                                            <span class="text-muted text-uppercase fs-12 fw-medium">Thương hiệu</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>

                                    <div id="flush-collapseBrands" class="accordion-collapse collapse show" aria-labelledby="flush-headingBrands">
                                        <div class="accordion-body text-body pt-0">
                                            <div class="d-flex flex-column gap-2 mt-3 filter-check">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Boat" id="productBrandRadio5" checked>
                                                    <label class="form-check-label" for="productBrandRadio5">Boat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="OnePlus" id="productBrandRadio4">
                                                    <label class="form-check-label" for="productBrandRadio4">OnePlus</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Realme" id="productBrandRadio3">
                                                    <label class="form-check-label" for="productBrandRadio3">Realme</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Sony" id="productBrandRadio2">
                                                    <label class="form-check-label" for="productBrandRadio2">Sony</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="JBL" id="productBrandRadio1" checked>
                                                    <label class="form-check-label" for="productBrandRadio1">JBL</label>
                                                </div>

                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingDiscount">
                                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount" aria-expanded="true" aria-controls="flush-collapseDiscount">
                                            <span class="text-muted text-uppercase fs-12 fw-medium">Màu Sắc</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseDiscount" class="accordion-collapse collapse" aria-labelledby="flush-headingDiscount">
                                        <div class="accordion-body text-body pt-1">
                                            <div class="list-group">
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="">
                                                    Declined Payment
                                                </label>
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="" checked>
                                                    Delivery Error
                                                </label>
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="" checked>
                                                    Wrong Amount
                                                </label>
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="">
                                                    Wrong Address
                                                </label>
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="">
                                                    Wrong UX/UI Solution
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingRating">
                                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseRating" aria-expanded="false" aria-controls="flush-collapseRating">
                                            <span class="text-muted text-uppercase fs-12 fw-medium">Giới Tính</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>

                                    <div id="flush-collapseRating" class="accordion-collapse collapse" aria-labelledby="flush-headingRating">
                                        <div class="accordion-body text-body">
                                            <div class="list-group">
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="">
                                                    Declined Payment
                                                </label>
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="" checked>
                                                    Delivery Error
                                                </label>
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="" checked>
                                                    Wrong Amount
                                                </label>
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="">
                                                    Wrong Address
                                                </label>
                                                <label class="list-group-item">
                                                    <input class="form-check-input me-1" type="checkbox" value="">
                                                    Wrong UX/UI Solution
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->


                </div>
                <!-- end row -->

            </div>
        </div>
    </div>

   <!-- start cta -->
   <section class="py-5 bg-primary position-relative">
    <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-sm">
                <div>
                    <h4 class="text-white mb-0 fw-semibold">Xây dựng ứng dụng web</h4>
                </div>
            </div>
            <!-- end col -->
            <div class="col-sm-auto">
                <div>
                    <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i> Liên hệ</a>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end cta -->

        <!-- start contact -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                            <p class="text-muted mb-4 ff-secondary">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with faucibus sapien odio measurable results.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                                <div class="ff-secondary fw-semibold">4461 Cedar Street Moro, <br />AR 72368</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                                <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New Orleans, LA</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-8">
                        <div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="name" class="form-label fs-13">Name</label>
                                            <input name="name" id="name" type="text" class="form-control bg-light border-light" placeholder="Your name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="email" class="form-label fs-13">Email</label>
                                            <input name="email" id="email" type="email" class="form-control bg-light border-light" placeholder="Your email*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label for="subject" class="form-label fs-13">Subject</label>
                                            <input type="text" class="form-control bg-light border-light" id="subject" name="subject" placeholder="Your Subject.." />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="comments" class="form-label fs-13">Message</label>
                                            <textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end contact -->



        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="{{ asset('build/assets/images/logo-light.png') }}" alt="logo light" height="17">
                            </div>
                            <div class="mt-4 fs-13">
                                <p>Premium Multipurpose Admin & Dashboard Template</p>
                                <p class="ff-secondary">You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Company</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-profile.html">About Us</a></li>
                                        <li><a href="pages-gallery.html">Gallery</a></li>
                                        <li><a href="apps-projects-overview.html">Projects</a></li>
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Apps Pages</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-pricing.html">Calendar</a></li>
                                        <li><a href="apps-mailbox.html">Mailbox</a></li>
                                        <li><a href="apps-chat.html">Chat</a></li>
                                        <li><a href="apps-crm-deals.html">Deals</a></li>
                                        <li><a href="apps-tasks-kanban.html">Kanban Board</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-faqs.html">FAQ</a></li>
                                        <li><a href="pages-faqs.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script> document.write(new Date().getFullYear()) </script> © Velzon - Themesbrand
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->


        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    <script src="{{ asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('build/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('build/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('build/assets/js/plugins.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('build/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- glightbox js -->
    <script src="{{ asset('build/assets/libs/glightbox/js/glightbox.min.js') }}"></script>
    <!-- landing init -->
    <script src="{{ asset('build/assets/js/pages/landing.init.js') }}"></script>
     <!-- isotope-layout -->
    <script src="{{ asset('build/assets/libs/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <!-- prismjs plugin -->
    <script src="{{ asset('build/assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('build/assets/js/pages/gallery.init.js') }}"></script>
       <!-- App js -->
       <script src="{{ asset('build/assets/js/app.js') }}"></script>
</body>

</html>

