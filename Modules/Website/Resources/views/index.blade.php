@extends('layouts.master')
@section('title', 'Jasa Pengembangan Website Profesional')
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        /*=============== CARD ===============*/
        .card__container {
            padding-block: 5rem;
        }

        .card__content {
            margin-inline: 1.75rem;
            border-radius: 1.25rem;
            overflow: hidden;
        }

        .card__article {
            width: 300px; /* Remove after adding swiper js */
            border-radius: 1.25rem;
            overflow: hidden;
        }

        .card__image {
            position: relative;
            background-color: var(--first-color-light);
            padding-top: 1.5rem;
            margin-bottom: -.75rem;
        }

        .card__data {
            background-color: var(--container-color);
            padding: 1.5rem 2rem;
            border-radius: 1rem;
            text-align: center;
            position: relative;
            z-index: 10;
        }

        .card__img {
            width: 180px;
            margin: 0 auto;
            position: relative;
            z-index: 5;
        }

        .card__shadow {
            width: 200px;
            height: 200px;
            background-color: var(--first-color-alt);
            border-radius: 50%;
            position: absolute;
            top: 3.75rem;
            left: 0;
            right: 0;
            margin-inline: auto;
            filter: blur(45px);
        }

        .card__name {
            font-size: var(--h2-font-size);
            color: var(--second-color);
            margin-bottom: .75rem;
        }

        .card__description {
            font-weight: 500;
            margin-bottom: 1.75rem;
        }

        .card__button {
            display: inline-block;
            background-color: var(--first-color);
            padding: .75rem 1.5rem;
            border-radius: .25rem;
            color: var(--dark-color);
            font-weight: 600;
        }

        /* Swiper class */
        .swiper-button-prev:after,
        .swiper-button-next:after {
            content: "";
        }

        .swiper-button-prev,
        .swiper-button-next {
            width: initial;
            height: initial;
            font-size: 3rem;
            color: var(--second-color);
            display: none;
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-pagination-bullet {
            background-color: hsl(212, 32%, 40%);
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: var(--second-color);
        }

        /*=============== BREAKPOINTS ===============*/
        /* For small devices */
        @media screen and (max-width: 320px) {
            .card__data {
                padding: 1rem;
            }
        }

        /* For medium devices */
        @media screen and (min-width: 768px) {
            .card__content {
                margin-inline: 3rem;
            }

            .swiper-button-next,
            .swiper-button-prev {
                display: block;
            }
        }

        /* For large devices */
        @media screen and (min-width: 1120px) {
            .card__container {
                max-width: 1120px;
            }

            .swiper-button-prev {
                left: -1rem;
            }
            .swiper-button-next {
                right: -1rem;
            }
        }
    </style>
@endsection
@section('body')

    <body data-bs-spy="scroll" data-bs-target="#navbar-example">
    @endsection
    @section('content')

        <!-- Begin page -->
        <div class="layout-wrapper landing">
            <nav class="navbar navbar-expand-lg navbar-landing fixed-top" data-aos="fade-down" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{ URL::asset('build/images/omni-logo-transparent.png') }}"
                             class="card-logo card-logo-dark" alt="logo dark" height="50">
                        {{--                        <img src="{{ URL::asset('build/images/logo-light.png') }}" class="card-logo card-logo-light" alt="logo light"--}}
                        {{--                             height="17">--}}
                    </a>
                    <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                            <li class="nav-item">
                                <a class="nav-link fs-14 active" href="#hero">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" href="#services">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" href="#features">Fitur</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" href="#plans">Paket</a>
                            </li>
                            {{--                            <li class="nav-item">--}}
                            {{--                                <a class="nav-link fs-14" href="#reviews">Ulasan</a>--}}
                            {{--                            </li>--}}
                            <li class="nav-item">
                                <a class="nav-link fs-14" href="#team">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" href="#contact">Kontak</a>
                            </li>
                        </ul>

                        {{--                        <div class="">--}}
                        {{--                            <a href="auth-signin-basic" class="btn btn-link fw-medium text-decoration-none text-dark">Sign--}}
                        {{--                                in</a>--}}
                        {{--                            <a href="auth-signup-basic" class="btn btn-primary">Sign Up</a>--}}
                        {{--                        </div>--}}
                    </div>

                </div>
            </nav>
            <!-- end navbar -->
            <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

            <!-- start hero section -->
            <section class="section job-hero-section pb-0" id="hero">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div>
                                <h1 data-aos="fade-right" class="display-6 fw-semibold text-capitalize mb-3 lh-base"
                                    style="background-color: white">Melangkah Ke Dunia Digital Dengan Penuh
                                    Persiapan.</h1>
                                <p class="lead text-muted lh-base mb-4" data-aos="fade-down" data-aos-delay="800">
                                    Kami akan memastikan kehadiran online anda dalam dunia digital website dengan
                                    efektif, menarik,
                                    up to date dan kreativitas tanpa batas.
                                </p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div data-aos="fade-left" class="position-relative home-img text-center mt-5 mt-lg-0">
                                <img src="{{URL::asset('build/images/job-profile2.png')}}" alt="" class="user-img">

                                <div class="circle-effect">
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <div class="circle4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end hero section -->

            {{--            <!-- start client section -->--}}
            {{--            <div class="pt-2 mt-2">--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col-lg-12">--}}

            {{--                            <div class="text-center mt-5">--}}
            {{--                                <h5 class="fs-20">Trusted <span class="text-primary text-decoration-underline">by</span> the world's best</h5>--}}

            {{--                                <!-- Swiper -->--}}
            {{--                                <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">--}}
            {{--                                    <div class="swiper-wrapper">--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="client-images">--}}
            {{--                                                <img src="{{ URL::asset('build/images/clients/amazon.svg') }}" alt="client-img"--}}
            {{--                                                     class="mx-auto img-fluid d-block">--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="client-images">--}}
            {{--                                                <img src="{{ URL::asset('build/images/clients/walmart.svg') }}" alt="client-img"--}}
            {{--                                                     class="mx-auto img-fluid d-block">--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="client-images">--}}
            {{--                                                <img src="{{ URL::asset('build/images/clients/lenovo.svg') }}" alt="client-img"--}}
            {{--                                                     class="mx-auto img-fluid d-block">--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="client-images">--}}
            {{--                                                <img src="{{ URL::asset('build/images/clients/paypal.svg') }}" alt="client-img"--}}
            {{--                                                     class="mx-auto img-fluid d-block">--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="client-images">--}}
            {{--                                                <img src="{{ URL::asset('build/images/clients/shopify.svg') }}" alt="client-img"--}}
            {{--                                                     class="mx-auto img-fluid d-block">--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="client-images">--}}
            {{--                                                <img src="{{ URL::asset('build/images/clients/verizon.svg') }}" alt="client-img"--}}
            {{--                                                     class="mx-auto img-fluid d-block">--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- end row -->--}}
            {{--                </div>--}}
            {{--                <!-- end container -->--}}
            {{--            </div>--}}
            {{--            <!-- end client section -->--}}

            <!-- start services -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5" data-aos="fade-down">
                                <h1 class="mb-3 ff-secondary fw-semibold lh-base">Layanan Unggulan untuk Kesuksesan
                                    Anda</h1>
                                <p class="text-muted">
                                    Dengan beberapa layanan kami yang paling unggul yaitu desain website kreatif,
                                    pengembangan berkualitas, pemeliharaan pasca-launch, custom kebutuhan dan dukungan
                                    konsultasi.
                                    Selain layanan tersebut berikut layanan kami lainnya untuk menuju kesuksesan online
                                    Anda.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row g-3">
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="200">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-pencil-ruler-2-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Desain Kreatif</h5>
                                    <p class="text-muted my-3 ff-secondary">Desain yang menarik dan efektif untuk
                                        menciptakan kesan pertama yang baik bagi pengunjung situs.</p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="300">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="mdi mdi-integrated-circuit-chip fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Teknologi Terkini</h5>
                                    <p class="text-muted my-3 ff-secondary">Kami selalu mengikuti perkembangan terbaru
                                        dalam teknologi web, sehingga situs Anda
                                        akan selalu menggunakan teknologi terkini dan terbaik.
                                    </p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="400">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="mdi mdi-tab-search fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">SEO-friendly</h5>
                                    <p class="text-muted my-3 ff-secondary">Kami memastikan bahwa situs web yang kami
                                        buat dioptimalkan untuk mesin pencari
                                        dalam mendapatkan peringkat tinggi di hasil pencarian Google.</p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="500">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="mdi mdi-bug-check-outline fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Pemeliharaan dan Pembaruan</h5>
                                    <p class="text-muted my-3 ff-secondary">Kami tidak hanya membuat situs web untuk
                                        Anda, tetapi juga dapat membantu Anda dalam
                                        pemeliharaan dan pembaruan berkelanjutan sehingga situs Anda tetap relevan.
                                    </p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="600">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-customer-service-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Dukungan Pelanggan 24 Jam</h5>
                                    <p class="text-muted my-3 ff-secondary">Kepuasan pelanggan adalah prioritas utama,
                                        dengan
                                        dukungan pelanggan yang responsif dan berkualitas selama seluruh
                                        siklus proyek, dari perencanaan hingga peluncuran dan pasca-peluncuran.</p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="700">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-settings-2-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Permintaan Kustom</h5>
                                    <p class="text-muted my-3 ff-secondary">kami bisa
                                        menyesuaikan solusi sesuai dengan kebutuhan dan tujuan spesifik Anda.</p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="800">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="ri-layout-masonry-line fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Desain Responsif dan Professional</h5>
                                    <p class="text-muted my-3 ff-secondary">Kami mengutamakan responsif dan profesional
                                        pada pembuatan web
                                        untuk memastikan pengalaman pengguna yang optimal pada ber.
                                    </p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="900">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="mdi mdi-check-decagram-outline fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Bergaransi</h5>
                                    <p class="text-muted my-3 ff-secondary">Kami mempunyai garansi pada paket-paket yang
                                        kami tawarkan, seperti garansi 2 bulan.</p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="1000">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle">
                                            <i class="mdi mdi-cash-check fs-36"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-18">Harga Terjangkau</h5>
                                    <p class="text-muted my-3 ff-secondary">Banyak penawaran paket dari kami untuk
                                        kesuaian minat anda atau permintaan paket kustom.</p>
                                    {{--                                    <div>--}}
                                    {{--                                        <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end services -->

            <!-- start features -->
            <section class="section bg-light py-5" id="features">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 col-sm-7 mx-auto">
                            <div data-aos="fade-right">
                                <img src="{{ URL::asset('build/images/landing/features/img-1.png') }}" alt=""
                                     class="img-fluid mx-auto">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted">
                                <div class="row mb-4" data-aos="fade-left">
                                    <div class="col-1 avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                            <i class="ri-collage-line fs-36"></i>
                                        </div>
                                    </div>
                                    <div class="col" style="display: flex; align-items: center">
                                        <h5 class="fs-12 text-uppercase text-success" style="margin: 0">Desain
                                            Layout</h5>
                                    </div>
                                </div>
                                <h3 class="mb-3 fs-20" data-aos="fade-down" data-aos-delay="400">Pengalaman Pengguna
                                    Multidevice</h3>
                                <p class="mb-4 ff-secondary fs-16" data-aos="fade-down" data-aos-delay="800">
                                    Dengan desain web yang sesuai dengan identitas merek Anda dan responsif di berbagai
                                    perangkat,
                                    memastikan bahwa situs web Anda dapat dinikmati dengan sempurna di berbagai
                                    perangkat.
                                </p>

                                <div class="row pt-3" data-aos="fade-down" data-aos-delay="1200">
                                    <div class="col-3" style="display: grid; justify-items: center;">
                                        <div class="avatar-sm icon-effect mb-4">
                                            <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                                <i class="ri-macbook-line fs-36"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p>Desktop</p>
                                        </div>
                                    </div>
                                    <div class="col-3" style="display: grid; justify-items: center;">
                                        <div class="avatar-sm icon-effect mb-4">
                                            <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                                <i class="ri-smartphone-line fs-36"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p>Ponsel</p>
                                        </div>
                                    </div>
                                    <div class="col-3" style="display: grid; justify-items: center;">
                                        <div class="avatar-sm icon-effect mb-4">
                                            <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                                <i class="ri-tablet-line fs-36"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p>Tablet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            {{--            <!-- start cta -->--}}
            {{--            <section class="py-5 bg-primary position-relative">--}}
            {{--                <div class="bg-overlay bg-overlay-pattern opacity-50"></div>--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row align-items-center gy-4">--}}
            {{--                        <div class="col-sm">--}}
            {{--                            <div>--}}
            {{--                                <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                        <div class="col-sm-auto">--}}
            {{--                            <div>--}}
            {{--                                <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                    </div>--}}
            {{--                    <!-- end row -->--}}
            {{--                </div>--}}
            {{--                <!-- end container -->--}}
            {{--            </section>--}}
            {{--            <!-- end cta -->--}}

            <!-- start features -->
            <section class="section">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="text-muted">
                                <div class="row mb-4" data-aos="fade-right">
                                    <div class="col-1 avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                            <i class="mdi mdi-search-web fs-36"></i>
                                        </div>
                                    </div>
                                    <div class="col" style="display: flex; align-items: center">
                                        <h5 class="fs-12 text-uppercase text-success" style="margin: 0">Search Engine
                                            Optimization</h5>
                                    </div>
                                </div>
                                <h4 class="mb-3" data-aos="fade-down" data-aos-delay="400">Meningkatkan Visibilitas
                                    Anda</h4>
                                <p class="mb-4 ff-secondary" data-aos="fade-down" data-aos-delay="800">
                                    Dengan praktik SEO terbaik, kami mengoptimalkan situs web Anda untuk mesin pencari,
                                    membantu Anda mencapai peringkat tinggi dan mencapai lebih banyak pelanggan.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                            <div data-aos="fade-left">
                                <img src="{{ URL::asset('build/images/landing/features/img-2.png') }}" alt=""
                                     class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                        <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                            <div data-aos="fade-right">
                                <img src="{{ URL::asset('build/images/landing/features/img-3.png') }}" alt=""
                                     class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted ps-lg-5">
                                <div class="row mb-4" data-aos="fade-left">
                                    <div class="col-1 avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                            <i class="mdi mdi-resize fs-36"></i>
                                        </div>
                                    </div>
                                    <div class="col" style="display: flex; align-items: center">
                                        <h5 class="fs-12 text-uppercase text-success" style="margin: 0">
                                            Skalabilitas</h5>
                                    </div>
                                </div>
                                <h4 class="mb-3" data-aos="fade-down" data-aos-delay="400">Pertumbuhan Tanpa Batas</h4>
                                <p class="mb-4" data-aos="fade-down" data-aos-delay="800">
                                    Dengan menggunakan salah satu teknologi terbaik, pengembangan sistem yang dapat
                                    dengan mudah diperluas dan
                                    disesuaikan dengan pertumbuhan bisnis Anda. Dengan mudah dapat menambahkan fitur
                                    baru dan memperluas fungsi yang ada.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start plan -->
            <section class="section bg-light" id="plans">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold" data-aos="zoom-in-down">Pilihan Paket Sesuai Kebutuhan
                                    Anda</h3>
                                <p class="text-muted mb-4" data-aos="zoom-in-down" data-aos-delay="400">
                                    mulai dari Paket Dasar yang hemat hingga Paket Eksklusif yang dirancang khusus untuk
                                    bisnis besar.
                                    Kami punya solusi sesuai dengan kebutuhan Anda.
                                </p>
                                <div class="d-flex justify-content-center align-items-center" data-aos="fade-zoom-in"
                                     data-aos-delay="1200">
                                    <div>
                                        <h5 class="fs-14 mb-0">Bulanan</h5>
                                    </div>
                                    <div class="form-check form-switch fs-20 ms-3 " onclick="check()">
                                        <input class="form-check-input" type="checkbox" id="plan-switch">
                                        <label class="form-check-label" for="plan-switch"></label>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 mb-0">
                                            Tahunan
                                            {{--                                            <span class="badge bg-success-subtle text-success">Save 20%</span>--}}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="card__container swiper">
                        <div class="card__content">
                            <div class="swiper-wrapper">
                                <article class="card__article swiper-slide">
                                    <div class="card plan-box mb-0">
                                        <div class="card-body p-4 m-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Paket Silver 1</h5>
                                                    <p class="text-muted mb-0">Landing Page / <br> Personal / Company
                                                        Profile</p>
                                                </div>
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle text-primary">
                                                        <i class="ri-medal-fill fs-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">210.000</span> <span
                                                        class="fs-13 text-muted">/Bulan</span></h1>
                                                <h1 class="annual"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">2.400.000</span> <span
                                                        class="fs-13 text-muted">/Tahun</span></h1>
                                            </div>

                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <b>1</b> Halaman
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Garansi <b>1</b> Bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Gratis Maintenance <b>1</b> Bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free domain (.my.id)
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free revisi <b>2</b> kali selama masa garansi
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-danger me-1">
                                                                <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Menggunakan Virtual Private Server
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-soft-success w-100">Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="card__article swiper-slide">
                                    <div class="card plan-box mb-0 ribbon-box right">
                                        <div class="card-body p-4 m-2">
                                            {{--                                        <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>--}}
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Paket Silver 2</h5>
                                                    <p class="text-muted mb-0">Landing Page / <br> Personal / Company
                                                        Profile</p>
                                                </div>
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle text-primary">
                                                        <i class="ri-medal-fill fs-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">230.000</span> <span
                                                        class="fs-13 text-muted">/Bulan</span></h1>
                                                <h1 class="annual"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">2.600.000</span> <span
                                                        class="fs-13 text-muted">/Tahun</span></h1>
                                            </div>

                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <b>3</b> Halaman
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Garansi <b>1</b> Bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free Maintenance <b>1</b> Bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free domain (.my.id)
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free revisi <b>2</b> kali selama masa garansi.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-danger me-1">
                                                                <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Menggunakan Virtual Private Server
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-soft-success w-100">Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="card__article swiper-slide">
                                    <div class="card plan-box mb-0">
                                        <div class="card-body p-4 m-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Paket Silver 3</h5>
                                                    <p class="text-muted mb-0">Landing Page / <br> Personal / Company
                                                        Profile</p>
                                                </div>
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle text-primary">
                                                        <i class="ri-medal-fill fs-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">250.000</span> <span
                                                        class="fs-13 text-muted">/Bulan</span></h1>
                                                <h1 class="annual"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">2.800.000</span> <span
                                                        class="fs-13 text-muted">/Tahun</span></h1>
                                            </div>

                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <b>5</b> Halaman
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Garansi <b>1</b> bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free Maintenance <b>1</b> bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free domain (.my.id)
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free revisi <b>2</b> kali selama masa garansi
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-danger me-1">
                                                                <i class="ri-close-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Menggunakan Virtual Private Server
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-soft-success w-100">Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="card__article swiper-slide">
                                    <div class="card plan-box mb-0">
                                        <div class="card-body p-4 m-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Paket Gold 1</h5>
                                                    <p class="text-muted mb-0">Landing Page / <br> Personal / Company
                                                        Profile</p>
                                                </div>
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle text-primary">
                                                        <i class="ri-vip-crown-2-fill fs-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">350.000</span> <span
                                                        class="fs-13 text-muted">/Bulan</span></h1>
                                                <h1 class="annual"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">4.000.000</span> <span
                                                        class="fs-13 text-muted">/Tahun</span></h1>
                                            </div>

                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <b>5</b> halaman
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Garansi <b>2</b> bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free maintenance selama <b>2</b> bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free domain (.ac.id, .sch.id, .or.id, .web.id, .my.id)
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free Revisi <b>3</b> kali selama masa garansi
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Menggunakan Virtual Private Server
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-soft-success w-100">Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="card__article swiper-slide">
                                    <div class="card plan-box mb-0 ribbon-box right">
                                        <div class="card-body p-4 m-2">
                                            <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Paket Gold 2</h5>
                                                    <p class="text-muted mb-0">landing Page / <br> Personal / Company
                                                        Profile</p>
                                                </div>
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle text-primary">
                                                        <i class="ri-vip-crown-2-fill fs-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup><small>RP</small></sup><span
                                                        class="ff-secondary fw-bold">550.000</span> <span
                                                        class="fs-13 text-muted">/Bulan</span></h1>
                                                <h1 class="annual"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">6.600.000</span> <span
                                                        class="fs-13 text-muted">/Tahun</span></h1>
                                            </div>

                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Full page (home, about, service, layanan, contact) bisa
                                                                request page
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Garansi <b>2</b> bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free maintenance selama <b>2</b> bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Domain (.com, .net, .id, .xyz, .ac.id, .sch.id, .or.id,
                                                                .web.id, .my.id)
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free Revisi <b>3</b> kali selama masa garansi
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Menggunakan Virtual Private Server
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-soft-success w-100">Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="card__article swiper-slide">
                                    <div class="card plan-box mb-0">
                                        <div class="card-body p-4 m-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Paket Platinum 1</h5>
                                                    <p class="text-muted mb-0">Booking / Portal Berita</p>
                                                </div>
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle text-primary">
                                                        <i class="ri-vip-diamond-fill fs-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">700.000</span> <span
                                                        class="fs-13 text-muted">/Bulan</span></h1>
                                                <h1 class="annual"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">8.400.000</span> <span
                                                        class="fs-13 text-muted">/Tahun</span></h1>
                                            </div>

                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Full page (home, about, service, layanan, contact) bisa
                                                                request page
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Garansi 2 Bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free Maintenance selama 2 bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Domain (.com, .net, .id, .xyz, .ac.id, .sch.id, .or.id,
                                                                .web.id, .my.id)
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free Revisi <b>3</b> kali selama masa garansi
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Menggunakan Virtual Private Server
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-soft-success w-100">Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="card__article swiper-slide">
                                    <div class="card plan-box mb-0">
                                        <div class="card-body p-4 m-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-1 fw-semibold">Paket Platinum 2</h5>
                                                    <p class="text-muted mb-0">Booking / Portal berita / <br> Toko Online
                                                        Sederhana</p>
                                                </div>
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle text-primary">
                                                        <i class="ri-vip-diamond-fill fs-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4 text-center">
                                                <h1 class="month"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">1.000.000</span> <span
                                                        class="fs-13 text-muted">/Bulan</span></h1>
                                                <h1 class="annual"><sup><small>Rp</small></sup><span
                                                        class="ff-secondary fw-bold">11.800.000</span> <span
                                                        class="fs-13 text-muted">/Tahun</span></h1>
                                            </div>

                                            <div>
                                                <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Full page (home, about, service, layanan, contact) bisa
                                                                request page
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Garansi <b>2</b> bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free Maintenance <b>3</b> bulan
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Domain (.com, .net, .id, .xyz, .ac.id, .sch.id, .or.id,
                                                                .web.id, .my.id)
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Free Revisi <b>5</b> kali selama masa garansi
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 text-success me-1">
                                                                <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                Menggunakan Virtual Private Server
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-soft-success w-100">Pesan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination pb-5"></div>
                </div>
                <!-- end container -->
            </section>
            <!-- end plan -->

            {{--            <!-- start faqs -->--}}
            {{--            <section class="section">--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row justify-content-center">--}}
            {{--                        <div class="col-lg-8">--}}
            {{--                            <div class="text-center mb-5">--}}
            {{--                                <h3 class="mb-3 fw-semibold">Frequently Asked Questions</h3>--}}
            {{--                                <p class="text-muted mb-4 ff-secondary">If you can not find answer to your question in our FAQ, you can--}}
            {{--                                    always contact us or email us. We will answer you shortly!</p>--}}

            {{--                                <div class="hstack gap-2 justify-content-center">--}}
            {{--                                    <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email Us</button>--}}
            {{--                                    <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i> Send Us Tweet</button>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- end row -->--}}

            {{--                    <div class="row g-lg-5 g-4">--}}
            {{--                        <div class="col-lg-6">--}}
            {{--                            <div class="d-flex align-items-center mb-2">--}}
            {{--                                <div class="flex-shrink-0 me-1">--}}
            {{--                                    <i class="ri-question-line fs-24 align-middle text-success me-1"></i>--}}
            {{--                                </div>--}}
            {{--                                <div class="flex-grow-1">--}}
            {{--                                    <h5 class="mb-0 fw-semibold">General Questions</h5>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"--}}
            {{--                                 id="genques-accordion">--}}
            {{--                                <div class="accordion-item">--}}
            {{--                                    <h2 class="accordion-header" id="genques-headingOne">--}}
            {{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
            {{--                                                data-bs-target="#genques-collapseOne" aria-expanded="true"--}}
            {{--                                                aria-controls="genques-collapseOne">--}}
            {{--                                            What is the purpose of using themes ?--}}
            {{--                                        </button>--}}
            {{--                                    </h2>--}}
            {{--                                    <div id="genques-collapseOne" class="accordion-collapse collapse show"--}}
            {{--                                         aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">--}}
            {{--                                        <div class="accordion-body ff-secondary">--}}
            {{--                                            A theme is a set of colors, fonts, effects, and more that can be applied to your entire presentation to give it a--}}
            {{--                                            consistent, professional look. You've already been using a theme, even if you didn't know it: the default Office theme,--}}
            {{--                                            which consists.--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="accordion-item">--}}
            {{--                                    <h2 class="accordion-header" id="genques-headingTwo">--}}
            {{--                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
            {{--                                                data-bs-target="#genques-collapseTwo" aria-expanded="false"--}}
            {{--                                                aria-controls="genques-collapseTwo">--}}
            {{--                                            Can a theme have more than one theme?--}}
            {{--                                        </button>--}}
            {{--                                    </h2>--}}
            {{--                                    <div id="genques-collapseTwo" class="accordion-collapse collapse"--}}
            {{--                                         aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">--}}
            {{--                                        <div class="accordion-body ff-secondary">--}}
            {{--                                            A story can have as many themes as the reader can identify based on recurring patterns and parallels within the story--}}
            {{--                                            itself. In looking at ways to separate themes into a hierarchy, we might find it useful to follow the example of a--}}
            {{--                                            single book.--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="accordion-item">--}}
            {{--                                    <h2 class="accordion-header" id="genques-headingThree">--}}
            {{--                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
            {{--                                                data-bs-target="#genques-collapseThree" aria-expanded="false"--}}
            {{--                                                aria-controls="genques-collapseThree">--}}
            {{--                                            What are theme features?--}}
            {{--                                        </button>--}}
            {{--                                    </h2>--}}
            {{--                                    <div id="genques-collapseThree" class="accordion-collapse collapse"--}}
            {{--                                         aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">--}}
            {{--                                        <div class="accordion-body ff-secondary">--}}
            {{--                                            Theme features is a set of specific functionality that may be enabled by theme authors. Themes must register each--}}
            {{--                                            individual Theme Feature that the author wishes to support. Theme support functions should be called in the theme's--}}
            {{--                                            functions.--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="accordion-item">--}}
            {{--                                    <h2 class="accordion-header" id="genques-headingFour">--}}
            {{--                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
            {{--                                                data-bs-target="#genques-collapseFour" aria-expanded="false"--}}
            {{--                                                aria-controls="genques-collapseFour">--}}
            {{--                                            What is simple theme?--}}
            {{--                                        </button>--}}
            {{--                                    </h2>--}}
            {{--                                    <div id="genques-collapseFour" class="accordion-collapse collapse"--}}
            {{--                                         aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">--}}
            {{--                                        <div class="accordion-body ff-secondary">--}}
            {{--                                            Simple is a free WordPress theme, by Themify, built exactly what it is named for: simplicity. Immediately upgrade the--}}
            {{--                                            quality of your WordPress site with the simple theme To use the built-in Chrome theme editor.--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <!--end accordion-->--}}

            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                        <div class="col-lg-6">--}}
            {{--                            <div class="d-flex align-items-center mb-2">--}}
            {{--                                <div class="flex-shrink-0 me-1">--}}
            {{--                                    <i class="ri-shield-keyhole-line fs-24 align-middle text-success me-1"></i>--}}
            {{--                                </div>--}}
            {{--                                <div class="flex-grow-1">--}}
            {{--                                    <h5 class="mb-0 fw-semibold">Privacy &amp; Security</h5>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box"--}}
            {{--                                 id="privacy-accordion">--}}
            {{--                                <div class="accordion-item">--}}
            {{--                                    <h2 class="accordion-header" id="privacy-headingOne">--}}
            {{--                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
            {{--                                                data-bs-target="#privacy-collapseOne" aria-expanded="false"--}}
            {{--                                                aria-controls="privacy-collapseOne">--}}
            {{--                                            Does Word have night mode?--}}
            {{--                                        </button>--}}
            {{--                                    </h2>--}}
            {{--                                    <div id="privacy-collapseOne" class="accordion-collapse collapse"--}}
            {{--                                         aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">--}}
            {{--                                        <div class="accordion-body ff-secondary">--}}
            {{--                                            You can run Microsoft Word in dark mode, which uses a dark color palette to help reduce eye strain in low light--}}
            {{--                                            settings. You can choose to make the document white or black using the Switch Modes button in the ribbon's View tab.--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="accordion-item">--}}
            {{--                                    <h2 class="accordion-header" id="privacy-headingTwo">--}}
            {{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"--}}
            {{--                                                data-bs-target="#privacy-collapseTwo" aria-expanded="true"--}}
            {{--                                                aria-controls="privacy-collapseTwo">--}}
            {{--                                            Is theme an opinion?--}}
            {{--                                        </button>--}}
            {{--                                    </h2>--}}
            {{--                                    <div id="privacy-collapseTwo" class="accordion-collapse collapse show"--}}
            {{--                                         aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">--}}
            {{--                                        <div class="accordion-body ff-secondary">--}}
            {{--                                            A theme is an opinion the author expresses on the subject, for instance, the author's dissatisfaction with the narrow--}}
            {{--                                            confines of French bourgeois marriage during that period theme is an idea that a writer repeats.--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="accordion-item">--}}
            {{--                                    <h2 class="accordion-header" id="privacy-headingThree">--}}
            {{--                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
            {{--                                                data-bs-target="#privacy-collapseThree" aria-expanded="false"--}}
            {{--                                                aria-controls="privacy-collapseThree">--}}
            {{--                                            How do you develop a theme?--}}
            {{--                                        </button>--}}
            {{--                                    </h2>--}}
            {{--                                    <div id="privacy-collapseThree" class="accordion-collapse collapse"--}}
            {{--                                         aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">--}}
            {{--                                        <div class="accordion-body ff-secondary">--}}
            {{--                                            A short story, novella, or novel presents a narrative to its reader. Perhaps that narrative involves mystery, terror,--}}
            {{--                                            romance, comedy, or all of the above. These works of fiction may also contain memorable characters, vivid--}}
            {{--                                            world-building, literary devices.--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="accordion-item">--}}
            {{--                                    <h2 class="accordion-header" id="privacy-headingFour">--}}
            {{--                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
            {{--                                                data-bs-target="#privacy-collapseFour" aria-expanded="false"--}}
            {{--                                                aria-controls="privacy-collapseFour">--}}
            {{--                                            Do stories need themes?--}}
            {{--                                        </button>--}}
            {{--                                    </h2>--}}
            {{--                                    <div id="privacy-collapseFour" class="accordion-collapse collapse"--}}
            {{--                                         aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">--}}
            {{--                                        <div class="accordion-body ff-secondary">--}}
            {{--                                            A story can have as many themes as the reader can identify based on recurring patterns and parallels within the story--}}
            {{--                                            itself. In looking at ways to separate themes into a hierarchy, we might find it useful to follow the example of a--}}
            {{--                                            single book.--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <!--end accordion-->--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                    </div>--}}
            {{--                    <!-- end row -->--}}
            {{--                </div>--}}
            {{--                <!-- end container -->--}}
            {{--            </section>--}}
            {{--            <!-- end faqs -->--}}

            {{--            <!-- start review -->--}}
            {{--            <section class="section bg-primary" id="reviews">--}}
            {{--                <div class="bg-overlay bg-overlay-pattern"></div>--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row justify-content-center">--}}
            {{--                        <div class="col-lg-10">--}}
            {{--                            <div class="text-center">--}}
            {{--                                <div>--}}
            {{--                                    <i class="ri-double-quotes-l text-success display-3"></i>--}}
            {{--                                </div>--}}
            {{--                                <h4 class="text-white mb-5"><span class="text-success">19k</span>+ Satisfied clients</h4>--}}

            {{--                                <!-- Swiper -->--}}
            {{--                                <div class="swiper client-review-swiper rounded" dir="ltr">--}}
            {{--                                    <div class="swiper-wrapper">--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="row justify-content-center">--}}
            {{--                                                <div class="col-10">--}}
            {{--                                                    <div class="text-white-50">--}}
            {{--                                                        <p class="fs-20 ff-secondary mb-4">" I am givng 5 stars. Theme is great and everyone one stuff everything in theme. Future request should not affect current--}}
            {{--                                                            state of theme. "</p>--}}

            {{--                                                        <div>--}}
            {{--                                                            <h5 class="text-white">gregoriusus</h5>--}}
            {{--                                                            <p>- Skote User</p>--}}
            {{--                                                        </div>--}}
            {{--                                                    </div>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <!-- end slide -->--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="row justify-content-center">--}}
            {{--                                                <div class="col-10">--}}
            {{--                                                    <div class="text-white-50">--}}
            {{--                                                        <p class="fs-20 ff-secondary mb-4">" Awesome support. Had few issues while setting up because of my device, the support team helped me fix them up in a day.--}}
            {{--                                                            Everything looks clean and good. Highly recommended! "</p>--}}

            {{--                                                        <div>--}}
            {{--                                                            <h5 class="text-white">GeekyGreenOwl</h5>--}}
            {{--                                                            <p>- Skote User</p>--}}
            {{--                                                        </div>--}}
            {{--                                                    </div>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <!-- end slide -->--}}
            {{--                                        <div class="swiper-slide">--}}
            {{--                                            <div class="row justify-content-center">--}}
            {{--                                                <div class="col-10">--}}
            {{--                                                    <div class="text-white-50">--}}
            {{--                                                        <p class="fs-20 ff-secondary mb-4">" Amazing template, Redux store and components is nicely designed.--}}
            {{--                                                            It's a great start point for an admin based project. Clean Code and good documentation. Template is--}}
            {{--                                                            completely in React and absolutely no usage of jQuery "</p>--}}

            {{--                                                        <div>--}}
            {{--                                                            <h5 class="text-white">sreeks456</h5>--}}
            {{--                                                            <p>- Veltrix User</p>--}}
            {{--                                                        </div>--}}
            {{--                                                    </div>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <!-- end slide -->--}}
            {{--                                    </div>--}}
            {{--                                    <div class="swiper-button-next bg-white rounded-circle"></div>--}}
            {{--                                    <div class="swiper-button-prev bg-white rounded-circle"></div>--}}
            {{--                                    <div class="swiper-pagination position-relative mt-2"></div>--}}
            {{--                                </div>--}}
            {{--                                <!-- end slider -->--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                    </div>--}}
            {{--                    <!-- end row -->--}}
            {{--                </div>--}}
            {{--                <!-- end container -->--}}
            {{--            </section>--}}
            {{--            <!-- end review -->--}}

            {{--            <!-- start counter -->--}}
            {{--            <section class="py-5 position-relative bg-light">--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row text-center gy-4">--}}
            {{--                        <div class="col-lg-3 col-6">--}}
            {{--                            <div>--}}
            {{--                                <h2 class="mb-2"><span class="counter-value" data-target="100">0</span>+</h2>--}}
            {{--                                <div class="text-muted">Projects Completed</div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}

            {{--                        <div class="col-lg-3 col-6">--}}
            {{--                            <div>--}}
            {{--                                <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>--}}
            {{--                                <div class="text-muted">Win Awards</div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}

            {{--                        <div class="col-lg-3 col-6">--}}
            {{--                            <div>--}}
            {{--                                <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>--}}
            {{--                                <div class="text-muted">Satisfied Clients</div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                        <div class="col-lg-3 col-6">--}}
            {{--                            <div>--}}
            {{--                                <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>--}}
            {{--                                <div class="text-muted">Employees</div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                    </div>--}}
            {{--                    <!-- end row -->--}}
            {{--                </div>--}}
            {{--                <!-- end container -->--}}
            {{--            </section>--}}
            {{--            <!-- end counter -->--}}

            <!-- start Work Process -->
            <section class="section" id="work">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold" data-aos="zoom-in-down">Sistem kerja Omni</h3>
                                <p class="text-muted mb-4 ff-secondary" data-aos="zoom-in-down" data-aos-delay="400">
                                    Omni Digital Technology mengikuti pendekatan terstruktur dalam pengembangan proyek
                                    website, memastikan hasil yang berkualitas dan memenuhi kebutuhan klien.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row text-center">
                        <div class="col-lg-4">
                            <div class="process-card mt-4" data-aos="fade-right" data-aos-delay="600">
                                <div class="process-arrow-img d-none d-lg-block">
                                    <img src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt=""
                                         class="img-fluid">
                                </div>
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-quill-pen-line"></i>
                                    </div>
                                </div>

                                <h5>Analisis dan Riset</h5>
                                <p class="text-muted ff-secondary">
                                    Pada tahap ini, kami berfokus pada pemahaman mendalam terhadap kebutuhan Anda.
                                    Kami akan berkomunikasi dengan Anda untuk menentukan tujuan, target audiens, dan
                                    spesifikasi proyek. Kami juga melakukan riset pasar dan pesaing untuk merumuskan
                                    strategi yang sesuai.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4" data-aos="fade-right" data-aos-delay="800">
                                <div class="process-arrow-img d-none d-lg-block">
                                    <img src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt=""
                                         class="img-fluid">
                                </div>
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-edit-box-line"></i>
                                    </div>
                                </div>

                                <h5>Perencanaan dan Desain</h5>
                                <p class="text-muted ff-secondary">
                                    Setelah analisis selesai, kami membuat rencana proyek yang mencakup jadwal,
                                    anggaran,
                                    dan sumber daya yang diperlukan. Desainer kami akan mulai merancang tampilan
                                    website,
                                    mengintegrasikan elemen desain yang menarik dan responsif. Anda akan diberikan
                                    konsep
                                    desain untuk persetujuan.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4" data-aos="fade-right" data-aos-delay="1000">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-code-s-slash-line"></i>
                                    </div>
                                </div>

                                <h5>Pengembangan</h5>
                                <p class="text-muted ff-secondary">
                                    Tahap ini melibatkan pengembangan website yang sesungguhnya. Tim pengembang kami
                                    akan menggunakan teknologi terkini, seperti Laravel, untuk menciptakan sistem
                                    backend
                                    yang kuat dan front-end yang responsif. Kami memastikan kualitas kode yang tinggi
                                    dan
                                    kepatuhan terhadap standar keamanan.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4" data-aos="fade-left" data-aos-delay="1600">
                                {{--                                <div class="process-arrow-img d-none d-lg-block">--}}
                                {{--                                    <img style="transform: scaleX(-1);" src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt="" class="img-fluid">--}}
                                {{--                                </div>--}}
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-bug-2-line"></i>
                                    </div>
                                </div>
                                <h5>Dukungan dan Pemeliharaan</h5>
                                <p class="text-muted ff-secondary">
                                    Setelah peluncuran, kami tetap memberikan dukungan teknis dan pemeliharaan. Kami
                                    siap
                                    merespons permintaan perubahan atau pemeliharaan rutin untuk menjaga website tetap
                                    optimal.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4" data-aos="fade-left" data-aos-delay="1400">
                                <div class="process-arrow-img d-none d-lg-block" style="left: -30%">
                                    <img style="transform: scaleX(-1);"
                                         src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt=""
                                         class="img-fluid">
                                </div>
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-global-line"></i>
                                    </div>
                                </div>

                                <h5>Peluncuran</h5>
                                <p class="text-muted ff-secondary">
                                    Setelah website lulus pengujian, kami siap untuk peluncuran. Kami melakukan
                                    peluncuran
                                    secara bertahap dan memantau kinerja untuk memastikan semuanya berjalan dengan
                                    lancar.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4" data-aos="fade-left" data-aos-delay="1200">
                                <div class="process-arrow-img d-none d-lg-block">
                                    <img style="transform: rotate(90deg); width: 70%; height: auto"
                                         src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt="">
                                </div>
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-terminal-box-line"></i>
                                    </div>
                                </div>
                                <h5>Pengujian</h5>
                                <p class="text-muted ff-secondary">
                                    Sebelum peluncuran, kami akan menguji website secara menyeluruh. Ini mencakup
                                    pengujian fungsional, uji kinerja, uji kompatibilitas perangkat, dan uji keamanan.
                                    Kami
                                    memastikan bahwa website beroperasi dengan baik dan bebas dari bug.
                                </p>
                                <div class="process-arrow-img d-none d-lg-block" style="left: -30%">
                                    <img style="transform: scaleX(-1);"
                                         src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4" data-aos="fade-right" data-aos-delay="1800">
                                <div class="process-arrow-img d-none d-lg-block">
                                    <img style="transform: scaleY(-1);"
                                         src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4" data-aos="fade-right" data-aos-delay="2000">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="mdi mdi-update"></i>
                                    </div>
                                </div>

                                <h5>Evaluasi dan Pembaruan</h5>
                                <p class="text-muted ff-secondary">
                                    Kami terus melakukan evaluasi kinerja website dan memberikan rekomendasi untuk
                                    pembaruan. Kami dapat memperbarui konten, fitur, atau sistem sesuai kebutuhan Anda.
                                </p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end Work Process -->

            <!-- start team -->
            <section class="section bg-light" id="team">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h2 class="mb-3 fw-semibold" data-aos="fade-down">Tentang <span class="text-danger">Omni Digital Technology</span>
                                </h2>
                                <br>
                                <h4 class="text-muted mb-4 ff-secondary" data-aos="fade-down" data-aos-delay="400">
                                    Omni Digital Technology adalah vendor yang bergerak di bidang jasa pembuatan web
                                    yang
                                    berkomitmen untuk menghadirkan solusi digital berkualitas bagi bisnis dan individu.
                                    Dengan
                                    fokus pada inovasi, kreativitas, dan teknologi terkini, Omni Digital Technology
                                    telah menjelma
                                    menjadi mitra yang sangat diandalkan dalam membangun kehadiran online yang kuat dan
                                    efektif.
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-lg-3 col-sm-6">--}}
                    {{--                            <div class="card">--}}
                    {{--                                <div class="card-body text-center p-4">--}}
                    {{--                                    <div class="avatar-xl mx-auto mb-4 position-relative">--}}
                    {{--                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="img-fluid rounded-circle">--}}
                    {{--                                        <a href="apps-mailbox"--}}
                    {{--                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">--}}
                    {{--                                            <div class="avatar-title bg-transparent">--}}
                    {{--                                                <i class="ri-mail-fill align-bottom"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- end card body -->--}}
                    {{--                                    <h5 class="mb-1"><a href="pages-profile" class="text-body">Nancy Martino</a></h5>--}}
                    {{--                                    <p class="text-muted mb-0 ff-secondary">Team Leader</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- end card -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- end col -->--}}
                    {{--                        <div class="col-lg-3 col-sm-6">--}}
                    {{--                            <div class="card">--}}
                    {{--                                <div class="card-body text-center p-4">--}}
                    {{--                                    <div class="avatar-xl mx-auto mb-4 position-relative">--}}
                    {{--                                        <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="img-fluid rounded-circle">--}}
                    {{--                                        <a href="apps-mailbox"--}}
                    {{--                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">--}}
                    {{--                                            <div class="avatar-title bg-transparent">--}}
                    {{--                                                <i class="ri-mail-fill align-bottom"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- end card body -->--}}
                    {{--                                    <h5 class="mb-1"><a href="pages-profile" class="text-body">Henry Baird</a></h5>--}}
                    {{--                                    <p class="text-muted mb-0 ff-secondary">Full Stack Developer</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- end card -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- end col -->--}}
                    {{--                        <div class="col-lg-3 col-sm-6">--}}
                    {{--                            <div class="card">--}}
                    {{--                                <div class="card-body text-center p-4">--}}
                    {{--                                    <div class="avatar-xl mx-auto mb-4 position-relative">--}}
                    {{--                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="img-fluid rounded-circle">--}}
                    {{--                                        <a href="apps-mailbox"--}}
                    {{--                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">--}}
                    {{--                                            <div class="avatar-title bg-transparent">--}}
                    {{--                                                <i class="ri-mail-fill align-bottom"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- end card body -->--}}
                    {{--                                    <h5 class="mb-1"><a href="pages-profile" class="text-body">Frank Hook</a></h5>--}}
                    {{--                                    <p class="text-muted mb-0 ff-secondary">Project Manager</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- end card -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- end col -->--}}
                    {{--                        <div class="col-lg-3 col-sm-6">--}}
                    {{--                            <div class="card">--}}
                    {{--                                <div class="card-body text-center p-4">--}}
                    {{--                                    <div class="avatar-xl mx-auto mb-4 position-relative">--}}
                    {{--                                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="img-fluid rounded-circle">--}}
                    {{--                                        <a href="apps-mailbox"--}}
                    {{--                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">--}}
                    {{--                                            <div class="avatar-title bg-transparent">--}}
                    {{--                                                <i class="ri-mail-fill align-bottom"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- end card body -->--}}
                    {{--                                    <h5 class="mb-1"><a href="pages-profile" class="text-body">Donald Palmer</a></h5>--}}
                    {{--                                    <p class="text-muted mb-0 ff-secondary">UI/UX Designer</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- end card -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- end col -->--}}
                    {{--                    </div>--}}
                    {{--                    <!-- end row -->--}}
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-lg-3 col-sm-6">--}}
                    {{--                            <div class="card">--}}
                    {{--                                <div class="card-body text-center p-4">--}}
                    {{--                                    <div class="avatar-xl mx-auto mb-4 position-relative">--}}
                    {{--                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="img-fluid rounded-circle">--}}
                    {{--                                        <a href="apps-mailbox"--}}
                    {{--                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">--}}
                    {{--                                            <div class="avatar-title bg-transparent">--}}
                    {{--                                                <i class="ri-mail-fill align-bottom"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- end card body -->--}}
                    {{--                                    <h5 class="mb-1"><a href="pages-profile" class="text-body">Erica Kernan</a></h5>--}}
                    {{--                                    <p class="text-muted mb-0 ff-secondary">Web Designer</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- end card -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- end col -->--}}
                    {{--                        <div class="col-lg-3 col-sm-6">--}}
                    {{--                            <div class="card">--}}
                    {{--                                <div class="card-body text-center p-4">--}}
                    {{--                                    <div class="avatar-xl mx-auto mb-4 position-relative">--}}
                    {{--                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="img-fluid rounded-circle">--}}
                    {{--                                        <a href="apps-mailbox"--}}
                    {{--                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">--}}
                    {{--                                            <div class="avatar-title bg-transparent">--}}
                    {{--                                                <i class="ri-mail-fill align-bottom"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- end card body -->--}}
                    {{--                                    <h5 class="mb-1"><a href="pages-profile" class="text-body">Alexis Clarke</a></h5>--}}
                    {{--                                    <p class="text-muted mb-0 ff-secondary">Backend Developer</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- end card -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- end col -->--}}
                    {{--                        <div class="col-lg-3 col-sm-6">--}}
                    {{--                            <div class="card">--}}
                    {{--                                <div class="card-body text-center p-4">--}}
                    {{--                                    <div class="avatar-xl mx-auto mb-4 position-relative">--}}
                    {{--                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="img-fluid rounded-circle">--}}
                    {{--                                        <a href="apps-mailbox"--}}
                    {{--                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">--}}
                    {{--                                            <div class="avatar-title bg-transparent">--}}
                    {{--                                                <i class="ri-mail-fill align-bottom"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- end card body -->--}}
                    {{--                                    <h5 class="mb-1"><a href="pages-profile" class="text-body">Marie Ward</a></h5>--}}
                    {{--                                    <p class="text-muted mb-0 ff-secondary">Full Stack Developer</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- end card -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- end col -->--}}

                    {{--                        <div class="col-lg-3 col-sm-6">--}}
                    {{--                            <div class="card">--}}
                    {{--                                <div class="card-body text-center p-4">--}}
                    {{--                                    <div class="avatar-xl mx-auto mb-4 position-relative">--}}
                    {{--                                        <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="img-fluid rounded-circle">--}}
                    {{--                                        <a href="apps-mailbox"--}}
                    {{--                                           class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">--}}
                    {{--                                            <div class="avatar-title bg-transparent">--}}
                    {{--                                                <i class="ri-mail-fill align-bottom"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- end card body -->--}}
                    {{--                                    <h5 class="mb-1"><a href="pages-profile" class="text-body">Jack Gough</a></h5>--}}
                    {{--                                    <p class="text-muted mb-0 ff-secondary">React Js Developer</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- end card -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- end col -->--}}
                    {{--                    </div>--}}
                    {{--                    <!-- end row -->--}}
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-lg-12">--}}
                    {{--                            <div class="text-center mt-2">--}}
                    {{--                                <a href="pages-team" class="btn btn-primary">View All Members <i--}}
                    {{--                                        class="ri-arrow-right-line ms-1 align-bottom"></i></a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <!-- end row -->--}}
                </div>
                <!-- end container -->
            </section>
            <!-- end team -->

            <!-- start contact -->
            <section class="section" id="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold" data-aos="fade-down">Lebih dekat dengan Kami</h3>
                                <p class="text-muted mb-4 ff-secondary" data-aos="fade-down" data-aos-delay="400">
                                    Hubungi kami sekarang untuk berbicara tentang kebutuhan dan ide Anda.
                                    Kunjungi kantor kami atau hubungi kami secara online. Kami siap untuk menjawab semua
                                    pertanyaan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div data-aos="fade-right" data-aos-delay="600">
                                <div class="mt-4">
                                    <h5 class="fs-13 text-muted text-uppercase">Alamat :</h5>
                                    <div class="ff-secondary fw-semibold">
                                        Jl. Raya Delanggu - Juwiring, <br>
                                        Dusun II, Bulan, Kec. Wonosari, <br>
                                        Kabupaten Klaten, Jawa Tengah <br>
                                        57473, Indonesia
                                    </div>
                                </div>
                                {{--                                <div class="mt-4">--}}
                                {{--                                    <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>--}}
                                {{--                                    <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New Orleans, LA</div>--}}
                                {{--                                </div>--}}
                                <div class="mt-4">
                                    <h5 class="fs-13 text-muted text-uppercase">Jam Pelayanan :</h5>
                                    <div class="ff-secondary fw-semibold">Setiap hari 24 jam</div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-8">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6" data-aos="zoom-in-right" data-aos-delay="800">
                                            <div class="mb-4">
                                                <label for="name" class="form-label fs-13">Nama</label>
                                                <input name="name" id="name" type="text"
                                                       class="form-control bg-light border-light"
                                                       placeholder="nama anda*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6" data-aos="zoom-in-left" data-aos-delay="800">
                                            <div class="mb-4">
                                                <label for="email" class="form-label fs-13">Email</label>
                                                <input name="email" id="email" type="email"
                                                       class="form-control bg-light border-light"
                                                       placeholder="email anda*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" data-aos="fade-zoom-in" data-aos-delay="1000">
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label for="subject" class="form-label fs-13">Subjek</label>
                                                <input type="text" class="form-control bg-light border-light"
                                                       id="subject"
                                                       name="subject" placeholder="subjek anda.."/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" data-aos="zoom-in-up" data-aos-delay="1200">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="comments" class="form-label fs-13">Pesan</label>
                                                <textarea name="comments" id="comments" rows="3"
                                                          class="form-control bg-light border-light"
                                                          placeholder="pesan anda..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" data-aos="zoom-in-right" data-aos-delay="1400">
                                        <div class="col-lg-12 text-end">
                                            <input type="submit" id="submit" name="send"
                                                   class="submitBnt btn btn-primary"
                                                   value="Send Message">
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

            {{--            <!-- start cta -->--}}
            {{--            <section class="py-5 bg-primary position-relative">--}}
            {{--                <div class="bg-overlay bg-overlay-pattern opacity-50"></div>--}}
            {{--                <div class="container">--}}
            {{--                    <div class="row align-items-center gy-4">--}}
            {{--                        <div class="col-sm">--}}
            {{--                            <div>--}}
            {{--                                <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                        <div class="col-sm-auto">--}}
            {{--                            <div>--}}
            {{--                                <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn bg-gradient btn-danger"><i class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <!-- end col -->--}}
            {{--                    </div>--}}
            {{--                    <!-- end row -->--}}
            {{--                </div>--}}
            {{--                <!-- end container -->--}}
            {{--            </section>--}}
            {{--            <!-- end cta -->--}}

            <!-- Start footer -->
            <footer class="custom-footer bg-dark py-5 position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mt-4">
                            <div>
                                <div data-aos="fade-right">
                                    <img src="{{ URL::asset('build/images/white-omni-logo-transparent.png') }}"
                                         alt="logo light" width="50%" height="25%">
                                </div>
                                <div class="mt-4 fs-13">
                                    <p data-aos="fade-down" data-aos-delay="400">Jembatan Menuju Inovasi.</p>
                                    <p data-aos="fade-down" data-aos-delay="800" class="ff-secondary">
                                        Kami disini untuk menjembatani kesenjangan antara ide-ide brilian dan inovasi
                                        teknologi meraih kesuksesan di dunia digital.
                                        Dengan dedikasi kami untuk inovasi yang tak terbatas, kami menjadi mitra andal
                                        bagi perusahaan dari berbagai industri.
                                        Jangan lewatkan peluang untuk merasakan keajaiban teknologi bersama kami.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 ms-lg-auto">
                            <div class="row">
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0" data-aos="fade-down">Company</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list fs-14">
                                            <li data-aos="fade-down" data-aos-delay="400"><a href="#team">Tentang
                                                    Kami</a></li>
                                            <li data-aos="fade-down" data-aos-delay="800"><a href="#work">Sistem
                                                    Kerja</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0" data-aos="fade-down">Apps Pages</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list fs-14">
                                            <li data-aos="fade-down" data-aos-delay="400"><a href="#hero">Beranda</a>
                                            </li>
                                            <li data-aos="fade-down" data-aos-delay="800"><a
                                                        href="#services">Layanan</a></li>
                                            <li data-aos="fade-down" data-aos-delay="1000"><a href="#features">Fitur</a>
                                            </li>
                                            <li data-aos="fade-down" data-aos-delay="1200"><a href="#plans">Paket</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0" data-aos="fade-down">Support</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled ff-secondary footer-list fs-14">
                                            <li data-aos="fade-down" data-aos-delay="400"><a href="#contact">Kontak</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center text-sm-start align-items-center mt-5">
                        <div class="col-sm-6">
                            <div>
                                <p class="copy-rights mb-0" id="copy-rights"></p>
                            </div>
                        </div>
                        {{--                    <div class="col-sm-6">--}}
                        {{--                        <div class="text-sm-end mt-3 mt-sm-0">--}}
                        {{--                            <ul class="list-inline mb-0 footer-social-link">--}}
                        {{--                                <li class="list-inline-item">--}}
                        {{--                                    <a href="javascript: void(0);" class="avatar-xs d-block">--}}
                        {{--                                        <div class="avatar-title rounded-circle">--}}
                        {{--                                            <i class="ri-facebook-fill"></i>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="list-inline-item">--}}
                        {{--                                    <a href="javascript: void(0);" class="avatar-xs d-block">--}}
                        {{--                                        <div class="avatar-title rounded-circle">--}}
                        {{--                                            <i class="ri-github-fill"></i>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="list-inline-item">--}}
                        {{--                                    <a href="javascript: void(0);" class="avatar-xs d-block">--}}
                        {{--                                        <div class="avatar-title rounded-circle">--}}
                        {{--                                            <i class="ri-linkedin-fill"></i>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="list-inline-item">--}}
                        {{--                                    <a href="javascript: void(0);" class="avatar-xs d-block">--}}
                        {{--                                        <div class="avatar-title rounded-circle">--}}
                        {{--                                            <i class="ri-google-fill"></i>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="list-inline-item">--}}
                        {{--                                    <a href="javascript: void(0);" class="avatar-xs d-block">--}}
                        {{--                                        <div class="avatar-title rounded-circle">--}}
                        {{--                                            <i class="ri-dribbble-line"></i>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            </footer>
            <!-- end footer -->

            <!--start back-to-top-->
            <button onclick="topFunction()" class="btn btn-info btn-icon landing-back-top" id="back-to-top">
                <i class="ri-arrow-up-line"></i>
            </button>
            <!--end back-to-top-->

        </div>
        <!-- end layout wrapper -->

    @endsection
    @section('script')
        <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ URL::asset('build/js/pages/landing.init.js') }}"></script>
        <script>
            let swiperCards = new Swiper(".card__content", {
                loop: true,
                spaceBetween: 32,
                grabCursor: true,

                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: true,
                },

                breakpoints:{
                    600: {
                        slidesPerView: 2,
                    },
                    968: {
                        slidesPerView: 3,
                    },
                },
            });
        </script>
@endsection
