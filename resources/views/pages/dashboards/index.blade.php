@extends('layouts.landing-master')

@section('styles')



@endsection

@section('content')

<!-- Start:: Section-1 -->
<div class="landing-banner" id="home">
    <section class="section">
        <div class="container main-banner-container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8">
                    <div class="py-5 pb-lg-0">
                        <div class="mb-3">
                            <h5 class="fw-semibold text-fixed-white op-9">Empower Your School Online</h5>
                        </div>
                        <p class="landing-banner-heading mb-3">Transform Your School's Digital Presence with Sehab Code!
                        </p>
                        <div class="fs-16 mb-5 text-fixed-white op-7">
                            Sehab Code - Your partner in creating stunning educational websites and powerful management
                            dashboards. We specialize in crafting digital solutions that elevate your school's online
                            presence and streamline your administrative processes. With our expertise in web development
                            and deep understanding of educational needs, we deliver custom-built platforms that engage
                            students, impress parents, and empower staff. Let Sehab Code turn your educational vision
                            into a digital reality.
                        </div>
                        <a href="https://themeforest.net/user/spruko/portfolio" target="_blank"
                            class="m-1 btn btn-primary">
                            Discover More
                            <i class="fe fe-eye ms-2 align-middle"></i>
                        </a>
                        <a href="{{url('index')}}" class="m-1 btn btn-info">
                            Get Started
                            <i class="fe fe-arrow-right ms-2 align-middle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End:: Section-1 -->

<!-- Start:: Section-2 -->
<section class="section section-bg" id="features">
    <div class="container text-center position-relative">
        <p class="fs-12 fw-semibold text-success mb-1">
            <span class="landing-section-heading">Our Services</span>
        </p>
        <div class="landing-title"></div>
        <h3 class="fw-semibold mb-2">Sehab Code Core Services</h3>
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <p class="text-muted fs-15 mb-5 fw-normal">We offer tailored digital solutions to elevate your school's
                    online presence and streamline management processes.</p>
            </div>
        </div>
        <div class="row g-2 justify-content-center">
            <div class="col-xl-12">
                <div class="row justify-content-evenly">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                        <div class="card features main-features main-features-4 p-4 active" data-wow-delay="0.1s">
                            <div class="bg-img mb-2">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="64" fill="#42A3DB"></circle>
                                    <path fill="#347CBE"
                                        d="M85.5 26.6 66.1 61 33.3 98.6 62.6 128H64c33.7 0 61.3-26 63.8-59.1L85.5 26.6z">
                                    </path>
                                    <path fill="#CD2F30"
                                        d="M73.1 57.7h-16c3.6 18.7 11.1 36.6 22.1 52.5.3-5 1-9.8 1.8-14.5 4.6 1.3 9.2 2.3 13.7 3-9.7-12.2-17-26.1-21.6-41z">
                                    </path>
                                    <path fill="#F04D45"
                                        d="M54.9 57.7c-4.6 15-11.9 28.9-21.6 40.9 4.5-.7 9.1-1.7 13.7-3 .9 4.7 1.5 9.5 1.8 14.5 11-15.9 18.4-33.8 22.1-52.5h-16z">
                                    </path>
                                    <path fill="#FFF"
                                        d="M93.5 52c1.8-1.8 1.8-4.7 0-6.5-1.3-1.3-1.7-3.3-1-5 1-2.4-.1-5-2.5-6-1.7-.7-2.8-2.4-2.8-4.3 0-2.5-2.1-4.6-4.6-4.6-1.9 0-3.5-1.1-4.3-2.8-1-2.4-3.7-3.5-6-2.5-1.7.7-3.7.3-5-1-1.8-1.8-4.7-1.8-6.5 0-1.3 1.3-3.3 1.7-5 1-2.4-1-5 .1-6 2.5-.7 1.7-2.4 2.8-4.3 2.8-2.5 0-4.6 2.1-4.6 4.6 0 1.9-1.1 3.5-2.8 4.3-2.4 1-3.5 3.7-2.5 6 .7 1.7.3 3.7-1 5-1.8 1.8-1.8 4.7 0 6.5 1.3 1.3 1.7 3.3 1 5-1 2.4.1 5 2.5 6 1.7.7 2.8 2.4 2.8 4.3 0 2.5 2.1 4.6 4.6 4.6 1.9 0 3.5 1.1 4.3 2.8 1 2.4 3.7 3.5 6 2.5 1.7-.7 3.7-.3 5 1 1.8 1.8 4.7 1.8 6.5 0 1.3-1.3 3.3-1.7 5-1 2.4 1 5-.1 6-2.5.7-1.7 2.4-2.8 4.3-2.8 2.5 0 4.6-2.1 4.6-4.6 0-1.9 1.1-3.5 2.8-4.3 2.4-1 3.5-3.7 2.5-6-.7-1.7-.3-3.7 1-5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-bold">Custom Landing Pages</h5>
                                <p class="mb-0">We design and develop engaging, responsive landing pages that showcase
                                    your school's unique identity and attract prospective students and parents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                        <div class="card features main-features main-features-2 wow p-4">
                            <div class="bg-img mb-2">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 128 128" viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="63.5" fill="#54C0EB"></circle>
                                    <path fill="#84DBFF"
                                        d="M19.2,109c11.5,11.4,27.3,18.5,44.8,18.5c17.5,0,33.3-7.1,44.8-18.5H19.2z">
                                    </path>
                                    <path fill="#324A5E"
                                        d="M103,92.7H25c-2.4,0-4.4-2-4.4-4.4V34.7c0-2.4,2-4.4,4.4-4.4h78c2.4,0,4.4,2,4.4,4.4v53.7   C107.4,90.7,105.4,92.7,103,92.7z">
                                    </path>
                                    <path fill="#FFF"
                                        d="M20.6,84v4.4c0,2.4,1.9,4.3,4.3,4.3H103c2.4,0,4.3-1.9,4.3-4.3V84H20.6z">
                                    </path>
                                    <rect width="80.3" height="46.9" x="23.9" y="33.4" fill="#FFF"></rect>
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-bold">School Management Dashboards</h5>
                                <p class="mb-0">Our intuitive dashboards streamline administrative tasks, providing
                                    real-time insights into student performance, attendance, and other key metrics for
                                    efficient school management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                        <div class="card features main-features main-features-3 wow p-4">
                            <div class="bg-img mb-2">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 128 128" viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="63.5" fill="#54C0EB"></circle>
                                    <path fill="#FFF"
                                        d="M42.2,96H23.6c-1.6,0-2.8-1.3-2.8-2.8V34.8c0-1.6,1.3-2.8,2.8-2.8h18.6c1.6,0,2.8,1.3,2.8,2.8v58.3   C45.1,94.7,43.8,96,42.2,96z">
                                    </path>
                                    <rect width="18.7" height="36.8" x="23.6" y="35.8" fill="#4CDBC4"></rect>
                                    <path fill="#FFF"
                                        d="M68.8,96H50.2c-1.6,0-2.8-1.3-2.8-2.8V34.8c0-1.6,1.3-2.8,2.8-2.8h18.6c1.6,0,2.8,1.3,2.8,2.8v58.3   C71.6,94.7,70.4,96,68.8,96z">
                                    </path>
                                    <rect width="18.7" height="36.8" x="50.1" y="35.8" fill="#FF7058"></rect>
                                    <path fill="#FFF"
                                        d="M109,92.7l-18,4.6c-1.5,0.4-3.1-0.5-3.5-2.1L73.2,38.7c-0.4-1.5,0.5-3.1,2.1-3.5l18-4.6   c1.5-0.4,3.1,0.5,3.5,2.1l14.3,56.5C111.5,90.8,110.6,92.4,109,92.7z">
                                    </path>
                                    <rect width="18.7" height="36.8" x="80.4" y="36.1" fill="#FFD05B"
                                        transform="rotate(-14.193 89.778 54.551)"></rect>
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-bold">Search Engine Optimization (SEO)</h5>
                                <p class="mb-0">We optimize your school's online presence to improve visibility in
                                    search results, helping you reach more potential students and parents in your local
                                    area.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Section-2 -->

<!-- Start:: Section-3 -->
<section class="section landing-Features">
    <div class="container text-center">
        <p class="fs-12 fw-semibold text-success mb-1"><span
                class="landing-section-heading text-fixed-white">Features</span>
        </p>
        <div class="landing-title"></div>
        <h3 class="fw-semibold mb-2 text-fixed-white ">Features Used in Valex</h3>
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <p class="text-fixed-white op-8 fs-15 mb-3 fw-normal">Some of the reviews our clients gave which brings
                    motivation to work for future projects.</p>
            </div>
        </div>
        <div class="text-start">
            <div class="justify-content-center">
                <div class="">
                    <div class="feature-logos mt-sm-5 flex-wrap">
                        <div class="ms-sm-5 ms-2 text-center">
                            <img src="{{asset('build/assets/images/media/landing/web/4.png')}}" alt="image"
                                class="featur-icon">
                            <h5 class="mt-3 text-fixed-white ">Laravel</h5>
                        </div>
                        <div class="ms-sm-5 ms-2 text-center">
                            <img src="{{asset('build/assets/images/media/landing/web/1.png')}}" alt="image"
                                class="featur-icon">
                            <h5 class="mt-3 text-fixed-white ">Bootstrap5</h5>
                        </div>
                        <div class="ms-sm-5 ms-2 text-center">
                            <img src="{{asset('build/assets/images/media/landing/web/2.png')}}" alt="image"
                                class="featur-icon">
                            <h5 class="mt-3 text-fixed-white ">HTML5</h5>
                        </div>
                        <div class="ms-sm-5 ms-2 text-center">
                            <img src="{{asset('build/assets/images/media/landing/web/3.png')}}" alt="image"
                                class="featur-icon">
                            <h5 class="mt-3 text-fixed-white ">Sass</h5>
                        </div>
                        <div class="ms-sm-5 ms-2 text-center">
                            <img src="{{asset('build/assets/images/media/landing/web/5.png')}}" alt="image"
                                class="featur-icon">
                            <h5 class="mt-3 text-fixed-white ">NPM</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>
<!-- End:: Section-3 -->

<!-- Start:: Section-4 -->
<section class="section" id="about">
    <div class="container text-center">
        <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">Our Mission</span>
        </p>
        <div class="landing-title"></div>
        <h3 class="fw-semibold mb-2">Empowering Schools with Digital Excellence</h3>
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <p class="text-muted fs-15 mb-3 fw-normal">At Sehab Wave, we're dedicated to transforming educational
                    institutions through innovative web solutions and digital strategies.</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mx-0">
            <div class="col-xxl-4 col-xl-5 col-lg-5 text-center text-lg-start">
                <img src="{{asset('build/assets/images/media/pngs/9.png')}}" alt="Sehab Wave Team" class="img-fluid">
            </div>
            <div class="col-xxl-8 col-xl-7 col-lg-7 pt-5 pb-0 px-lg-2 px-5 text-start">
                <h4 class="text-lg-start fw-medium mb-4">We are a passionate team of web experts dedicated to elevating
                    educational institutions online.</h4>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="d-flex mb-2">
                            <span>
                                <i class='bx bxs-badge-check text-primary fs-18'></i>
                            </span>
                            <div class="ms-2">
                                <h6 class="fw-medium mb-0">Custom Landing Pages</h6>
                                <p class="text-muted mb-3">We create visually stunning and highly effective landing
                                    pages that showcase your school's unique identity and attract prospective students
                                    and parents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="d-flex mb-2">
                            <span>
                                <i class='bx bxs-badge-check text-primary fs-18'></i>
                            </span>
                            <div class="ms-2">
                                <h6 class="fw-medium mb-0">Intuitive School Management Dashboards</h6>
                                <p class="text-muted mb-3">Our dashboards streamline administrative tasks, providing
                                    real-time insights into student performance, attendance, and other key metrics for
                                    efficient school management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="d-flex mb-2">
                            <span>
                                <i class='bx bxs-badge-check text-primary fs-18'></i>
                            </span>
                            <div class="ms-2">
                                <h6 class="fw-medium mb-0">Targeted SEO Strategies</h6>
                                <p class="text-muted">We optimize your school's online presence to improve visibility in
                                    search results, helping you reach more potential students and parents in your local
                                    area and beyond.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Section-4 -->

<!-- Start:: Section-5 -->
{{-- <section class="section section-bg " id="statistics">
    <div class="container text-center">
        <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">Statistics</span>
        </p>
        <div class="landing-title"></div>
        <h3 class="fw-semibold mb-2">More than 120+ projects completed.</h3>
        <div class="row justify-content-center mb-5">
            <div class="col-xl-7">
                <p class="text-muted fs-15mb-0 fw-normal">We are proud to have top class clients and customers,which
                    motivates us to work more on projects.</p>
            </div>
        </div>
        <div class="row  g-2 justify-content-center">
            <div class="col-xl-12">
                <div class="row justify-content-evenly">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                        <div class="p-3 text-center rounded-2 bg-white border">
                            <span class="mb-3 avatar avatar-lg rounded-2 bg-primary-transparent">
                                <i class='fs-20 fe fe-grid'></i>
                            </span>
                            <h3 class="fw-semibold mb-0 text-dark">120+</h3>
                            <p class="mb-1 fs-14 op-7 text-muted ">
                                Projects
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                        <div class="p-3 text-center rounded-2 bg-white border">
                            <span class="mb-3 avatar avatar-lg rounded-2 bg-primary-transparent">
                                <i class='fs-20 fe fe-user-plus'></i>
                            </span>
                            <h3 class="fw-semibold mb-0 text-dark">20K+</h3>
                            <p class="mb-1 fs-14 op-7 text-muted ">
                                Clients
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                        <div class="p-3 text-center rounded-2 bg-white border">
                            <span class="mb-3 avatar avatar-lg rounded-2 bg-primary-transparent">
                                <i class='fs-20 fe fe-users'></i>
                            </span>
                            <h3 class="fw-semibold mb-0 text-dark">854</h3>
                            <p class="mb-1 fs-14 op-7 text-muted ">
                                Employees
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                        <div class="p-3 text-center rounded-2 bg-white border">
                            <span class="mb-3 avatar avatar-lg rounded-2 bg-primary-transparent">
                                <i class='fs-20 fe fe-calendar'></i>
                            </span>
                            <h3 class="fw-semibold mb-0 text-dark">5+</h3>
                            <p class="mb-1 fs-14 op-7 text-muted ">
                                Years of Experience
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> --}}
<!-- End:: Section-5 -->

<!-- Start:: Section-6 -->
<section class="section section-bg" id="pricing">
    <div class="container">
        <p class="fs-12 fw-semibold text-success mb-1 text-center"><span class="landing-section-heading">PRICING</span>
        </p>
        <h3 class="fw-semibold mb-2 text-center">Digital Solutions for Kindergartens</h3>
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <p class="text-muted fs-15 mb-5 fw-normal">Choose the perfect package to showcase your kindergarten
                    online.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 p-3 pricing-card shadow-none">
                    <div class="card-header d-block text-justified pt-2">
                        <p class="fs-18 fw-semibold mb-1">Landing Page</p>
                        <p class="text-justify fw-semibold mb-1">
                            <span class="fs-15 me-2">$</span><span class="fs-22 me-1">299</span>
                            <span class="fs-13"><span class="op-0-5 text-muted text-20">/</span> one-time</span>
                        </p>
                        <p class="fs-13 mb-1">Perfect for getting your kindergarten online quickly.</p>
                    </div>
                    <div class="card-body pt-2">
                        <ul class="text-justify pricing-body ps-0 mt-3 list-unstyled">
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2 fs-16"></i><strong>Custom
                                    Landing Page</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2 fs-16"></i><strong>Mobile-Friendly
                                    Design</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2 fs-16"></i><strong>Contact
                                    Form</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2 fs-16"></i><strong>Basic
                                    SEO Setup</strong></li>
                        </ul>
                    </div>
                    <div class="card-footer text-center border-top-0 py-0 mt-auto">
                        <button class="btn btn-outline-primary w-100">
                            <span class="ms-4 me-4">Select Plan</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 p-3 pricing-card shadow-none">
                    <div class="card-header d-block text-justified pt-2">
                        <p class="fs-18 fw-semibold mb-1">Dashboard</p>
                        <p class="text-justify fw-semibold mb-1">
                            <span class="fs-15 me-2">$</span><span class="fs-22 me-1">399</span>
                            <span class="fs-13"><span class="op-0-5 text-muted text-20">/</span> one-time</span>
                        </p>
                        <p class="fs-13 mb-1">Efficient management tools for your kindergarten.</p>
                    </div>
                    <div class="card-body pt-2">
                        <ul class="text-justify pricing-body ps-0 mt-3 list-unstyled">
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2 fs-16"></i><strong>Basic
                                    Management Dashboard</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2 fs-16"></i><strong>Student
                                    Information System</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2 fs-16"></i><strong>Attendance
                                    Tracking</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2 fs-16"></i><strong>Basic
                                    Reporting</strong></li>
                        </ul>
                    </div>
                    <div class="card-footer text-center border-top-0 py-0 mt-auto">
                        <button class="btn btn-outline-primary w-100">
                            <span class="ms-4 me-4">Select Plan</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 p-3 border-primary pricing-card advanced shadow-none">
                    <div class="p-4 bg-primary rounded-3 d-block text-justified pt-2 text-fixed-white">
                        <p class="fs-18 fw-semibold mb-1 pe-0">
                            Landing Page + Dashboard
                            <span class="badge bg-white text-primary float-end font-weight-normal fs-11">Popular</span>
                        </p>
                        <p class="text-justify fw-semibold mb-1">
                            <span class="fs-15 me-2">$</span><span class="fs-22 me-1">599</span>
                            <span class="fs-13"><span class="op-5 text-fixed-white text-20">/</span> one-time</span>
                        </p>
                        <p class="fs-13 mb-2">Complete online presence with management tools.</p>
                    </div>
                    <div class="card-body pt-2">
                        <ul class="text-justify pricing-body ps-0 list-unstyled mt-3">
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary fs-16 me-2"></i><strong>Custom
                                    Landing Page</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary fs-16 me-2"></i><strong>Mobile-Friendly
                                    Design</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary fs-16 me-2"></i><strong>Contact
                                    Form</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary fs-16 me-2"></i><strong>Advanced
                                    SEO Setup</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary fs-16 me-2"></i><strong>Management
                                    Dashboard</strong></li>
                            <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary fs-16 me-2"></i><strong>Enhanced
                                    Reporting</strong></li>
                        </ul>
                    </div>
                    <div class="card-footer text-center border-top-0 py-0 mt-auto">
                        <button class="btn btn-primary w-100">
                            <span class="ms-4 me-4">Select Plan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Section-6 -->

<!-- Start:: Section-7 -->
{{-- <section class="section landing-testimonials section-bg" id="testimonials">
    <div class="container text-center">
        <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">TESTIMONIALS</span>
        </p>
        <div class="landing-title"></div>
        <h3 class="fw-semibold mb-2">What People Are Saying About Our Product.</h3>
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <p class="text-muted fs-15 mb-5 fw-normal">Some of the reviews our clients gave which brings motivation
                    to work for future projects.</p>
            </div>
        </div>
        <div class="swiper pagination-dynamic text-start">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quod eos id
                                    officiis hic tenetur quae quaerat
                                    ad velit ab. Lorem ipsum dolor sit amet.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Json Taylor</p>
                                <p class="mb-0 fs-11 text-muted">Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    Nulla in nunc eu justo varius bibendum ac quis metus. Phasellus varius aliquam lorem
                                    quis sem vitae, pellentesque.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Harry Linson</p>
                                <p class="mb-0 fs-11 text-muted">CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    In nec elit nec risus varius cursus vitae eget augue. Vestibulum bibendum, diam nec
                                    elementum imperdiet mollis in lacinia vitae.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Mathew Brown</p>
                                <p class="mb-0 fs-11 text-muted">Project Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    Phasellus varius aliquam lorem ut fringilla. Proin lobortis ipsum in libero
                                    elementum rhoncus augue enim ac quam.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Ronne Gally</p>
                                <p class="mb-0 fs-11 text-muted">Backend Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    Vestibulum bibendum, diam nec elementum imperdiet, nisi odio mattis metus, ac
                                    ullamcorper Cras nec aliquet sem.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Jim Carilett</p>
                                <p class="mb-0 fs-11 text-muted">UI Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    Nullam dignissim velit ac libero varius facilisis. Pellentesque habitant morbi
                                    tristique senectus eget lorem metus.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Kami Johnson</p>
                                <p class="mb-0 fs-11 text-muted">Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    Sed dapibus risus eu nibh aliquet, et sodales libero vulputate. Nullam lacinia diam
                                    sem Sed dapibus risus eu nib.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Marina Rotior</p>
                                <p class="mb-0 fs-11 text-muted">UI Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    Nullam ultrices sem ut gravida ultricies. Suspendisse vitae felis sit amet dolor
                                    tempor lacinia Sed in lorem convallis, tempus nisi vel.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Elizabeth</p>
                                <p class="mb-0 fs-11 text-muted">Backend Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card custom-card testimonial-card shadow-none">
                        <div class="card-body">
                            <div class="testimonia text-center">
                                <span class="avatar avatar-xl avatar-rounded mb-1">
                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                </span>
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <span class="text-warning d-block">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </div>
                                <p class="op-8 mb-4">
                                    <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                    Curabitur auctor purus et laoreet molestie. Sed eleifend scelerisque posuere. In ac
                                    vehicula turpis acinia diam sem aliquam lorem.
                                </p>
                                <p class="mb-0 fw-semibold fs-16">Williamson</p>
                                <p class="mb-0 fs-11 text-muted">UI Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section> --}}
<!-- End:: Section-7 -->

<!-- Start:: Section-8 -->
{{-- <section class="section" id="faq">
    <div class="container text-center">
        <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">F.A.Q</span>
        </p>
        <div class="landing-title"></div>
        <h3 class="fw-semibold mb-2">Frequently asked questions ?</h3>
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <p class="text-muted fs-15 mb-5 fw-normal">We have shared some of the most frequently asked questions to
                    help you out.</p>
            </div>
        </div>
        <div class="row text-start">
            <div class="col-xl-12">
                <div class="row gy-2">
                    <div class="col-xl-6">
                        <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                            id="accordionFAQ1">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1One">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                                        aria-controls="collapsecustomicon1One">
                                        Where can I subscribe to your newsletter?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                                    aria-labelledby="headingcustomicon1One" data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1Two">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon1Two" aria-expanded="false"
                                        aria-controls="collapsecustomicon1Two">
                                        Where can in edit my address?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon1Two" data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1Three">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon1Three" aria-expanded="false"
                                        aria-controls="collapsecustomicon1Three">
                                        What are your opening hours?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon1Three" data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1Four">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon1Four" aria-expanded="false"
                                        aria-controls="collapsecustomicon1Four">
                                        Do I have the right to return an item?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1Four" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon1Four" data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1Five">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon1Five" aria-expanded="false"
                                        aria-controls="collapsecustomicon1Five">
                                        General Terms & Conditions (GTC)
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1Five" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon1Five" data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon1Six">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon1Six" aria-expanded="false"
                                        aria-controls="collapsecustomicon1Six">
                                        Do I need to create an account to make an order?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon1Six" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon1Six" data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                            id="accordionFAQ2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon2Five">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon2Five" aria-expanded="false"
                                        aria-controls="collapsecustomicon2Five">
                                        General Terms & Conditions (GTC)
                                    </button>
                                </h2>
                                <div id="collapsecustomicon2Five" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon2Five" data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon2Six">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon2Six" aria-expanded="false"
                                        aria-controls="collapsecustomicon2Six">
                                        Do I need to create an account to make an order?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon2Six" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon2Six" data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon2One">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon2One" aria-expanded="true"
                                        aria-controls="collapsecustomicon2One">
                                        Where can I subscribe to your newsletter?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon2One" class="accordion-collapse collapse "
                                    aria-labelledby="headingcustomicon2One" data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon2Two">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon2Two" aria-expanded="false"
                                        aria-controls="collapsecustomicon2Two">
                                        Where can in edit my address?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon2Two" data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon2Three">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon2Three" aria-expanded="false"
                                        aria-controls="collapsecustomicon2Three">
                                        What are your opening hours?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon2Three" class="accordion-collapse collapse"
                                    aria-labelledby="headingcustomicon2Three" data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingcustomicon2Four">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsecustomicon2Four" aria-expanded="false"
                                        aria-controls="collapsecustomicon2Four">
                                        Do I have the right to return an item?
                                    </button>
                                </h2>
                                <div id="collapsecustomicon2Four" class="accordion-collapse collapse show"
                                    aria-labelledby="headingcustomicon2Four" data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance,
                                        as well as the showing and hiding via CSS transitions. You can modify
                                        any of this with custom CSS or overriding our default variables. It's
                                        also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End:: Section-8 -->

<!-- Start:: Section-9 -->
<section class="section section-bg" id="contact">
    <div class="container text-center">
        <p class="fs-12 fw-semibold text-success mb-1"><span class="landing-section-heading">CONTACT US</span>
        </p>
        <div class="landing-title"></div>
        <h3 class="fw-semibold mb-2">Have any questions ? We would love to hear from you.</h3>
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <p class="text-muted fs-15 mb-5 fw-normal">You can contact us anytime regarding any queries or
                    deals,dont hesitate to clear your doubts before trying our product.</p>
            </div>
        </div>
        <div class="text-start row justify-content-between">
            <div class="col-lg-4">
                <div class="card shadow-none">
                    <div class="card-body px-5 py-4">

                        <div class="d-flex mb-3">
                            <div class="contact-icon border bg-danger-transparent">
                                <i class="fe fe-mail text-danger fs-17"></i>
                            </div>
                            <div class="ms-3 text-start">
                                <h6 class="mb-1 fw-medium">
                                    Email</h6>
                                <p>ahmaadzaid7@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="contact-icon border bg-success-transparent">
                                <i class="fe fe-headphones text-success fs-17"></i>
                            </div>
                            <div class="ms-3 text-start">
                                <h6 class="mb-1 fw-medium">
                                    Contact</h6>
                                <p>+965 66579000 </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow-none">
                    <div class="card-body px-5 pt-4">

                        @if (session('success'))
                        <script>
                            alert('{{ session('success') }}');
                        </script>
                        @endif
                        <form action="{{ route('messages.store') }}" method="POST"
                            onsubmit="return confirmSubmission()">

                            <div class="row mt-1">
                                @csrf
                                <div class="col-xl-6">
                                    <div class="form-group ">
                                        <label for="cusName" class="form-label">Name
                                            <span class="text-danger">*</span></label>
                                        <input name="name" type="text" class="form-control" id="cusName"
                                            placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="cusEmail" class="form-label">Email
                                            <span class="text-danger">*</span></label>
                                        <input name="email" type="text" class="form-control" id="cusEmail"
                                            placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cusMessage" class="form-label">Message <span
                                        class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control" id="cusMessage"
                                    placeholder="Type your message here..." name="message"></textarea>
                            </div>
                            <div class="form-group mb-2 pt-1">
                                <button class="btn btn-primary">Send Message</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Section-9 -->

<!-- Start:: Section-10 -->
<section class="section landing-footer text-fixed-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="px-4">
                    <p class="fw-semibold mb-3"><a href="{{url('index')}}"><img
                                src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt=""
                                class="logo-img"></a></p>
                    <p class="mb-3 op-6 fw-normal">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et magnam, fuga est
                        mollitia eius, quo illum illo inventore optio aut quas omnis rem. Dolores accusantium aspernatur
                        minus ea incidunt.
                    </p>
                    <div class="input-group">
                        <input type="text" class="form-control bg-transparent text-fixed-white"
                            placeholder="Enter your email" aria-label="Example text with button addon"
                            aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="px-4">
                    <h6 class="fw-semibold mb-3 text-fixed-white">Pages</h6>
                    <ul class="list-unstyled fw-normal landing-footer-list">
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Email</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Profile</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Timeline</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Projects</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Contacts</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="px-4">
                    <h6 class="fw-semibold text-fixed-white">Information</h6>
                    <ul class="list-unstyled fw-normal landing-footer-list">
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Our Team</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Contact US</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">About</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Services</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Blog</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="px-4">
                    <h6 class="fw-semibold text-fixed-white">Contact</h6>
                    <ul class="list-unstyled fw-normal landing-footer-list">
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                    class="ri-home-4-line me-1 align-middle"></i> New York, NY 10012, US</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                    class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                    class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                    class="ri-printer-line me-1 align-middle"></i> +(123) 1293 123</a>
                        </li>
                        <li class="mt-3">
                            <p class="mb-2 fw-semibold op-8">FOLLOW US ON :</p>
                            <div class="mb-0">
                                <div class="btn-list">
                                    <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                        <i class="ri-facebook-line fw-bold"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                        <i class="ri-twitter-x-line fw-bold"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                        <i class="ri-instagram-line fw-bold"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                        <i class="ri-github-line fw-bold"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-wave waves-effect waves-light">
                                        <i class="ri-youtube-line fw-bold"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Section-10 -->

<div class="text-center landing-main-footer py-3">
    <span class="text-muted fs-15"> Copyright © <span id="year"></span> <a href="javascript:void(0);"
            class="text-primary fw-semibold"><u>Valex</u></a>.
        Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"
            class="text-primary fw-semibold"><u>
                Spruko</u>
        </a> All
        rights
        reserved
    </span>
</div>

@endsection

@section('scripts')



@endsection