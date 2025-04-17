@extends('frontend.layouts.app')



@section('content')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper breadcumb-layout1 background-image link-inherit  mb-30"
        data-vs-img="/frontend/assets/img/about/breadcumb-bg-1-1.jpg" data-overlay="black" data-opacity="6">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
                <h1 class="breadcumb-title sec-title1 text-white my-0">About Us</h1>
                <ul class="breadcumb-menu-style1 bg-white">
                    <li><a href="https://smashinit.co.uk"><i class="fal fa-home text-theme"></i>Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
      About Area
    ==============================-->
    <section class="vs-about-wrapper vs-about-layout4 py-lg-150  pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <p class="h3 text-theme text-font3 mb-10">Our Story</p>
                        <h2 class="sec-title1">About Us</h2>
                        <p class="about-text">Compellingly engage backend technology and 2.0 strategic theme areas.
                            Distinctively simplify world-class portals through global human capital. Holisticly expedite
                            multimedia based materials and end-to-end architectures. Continually expedite magnetic synergy
                            without front-end benefits. Credibly orchestrate premium alignments through real-time
                            alignments.</p>
                        <div class="vs-carousel vs-3dcarousel pt-lg-15 pb-30 pb-lg-40" data-slidetoshow="1"
                            data-variablewidth="true" data-loop="false">
                            <div>
                                <!-- <img src="/frontend/assets/img/about/about-slide-1-1.jpg" alt="About Image"> -->
                                <img src="/frontend/assets/img/about/about-slide-1-1.jpg" alt="About Image">
                            </div>
                            <div>
                                <img src="/frontend/assets/img/about/about-slide-1-2.jpg" alt="About Image">
                            </div>
                            <div>
                                <img src="/frontend/assets/img/about/about-slide-1-3.jpg" alt="About Image">
                            </div>
                            <div>
                                <img src="/frontend/assets/img/about/about-slide-1-4.jpg" alt="About Image">
                            </div>
                            <div>
                                <img src="/frontend/assets/img/about/about-slide-1-5.jpg" alt="About Image">
                            </div>
                            <div>
                                <img src="/frontend/assets/img/about/about-slide-1-6.jpg" alt="About Image">
                            </div>
                        </div>
                        <p class="about-text">Synergistically envisioneer client-centered functionalities for go forward
                            data. Progressively productivate transparent outsourcing for exceptional synergy. Progressively
                            maximize front-end action items and focused interfaces.infrastructures through superior
                            intellectual capital. Appropriately reinvent principle-centered resources whereas cross-platform
                            niche markets.Compellingly engage backend technology and 2.0 strategic theme areas.
                            Distinctively simplify world-class portals through global human capital. Holisticly expedite
                            multimedia based materials and end-to-end architectures. Continually expedite magnetic synergy
                            without front-end benefits. Credibly orchestrate premium alignments through real-time
                            alignments.</p>
                        <!--==============================
                            Service Area
                        ==============================-->
                        <div class="vs-service-wrapper vs-service-layout2 pt-10 pt-lg-60">
                            <div class="row arrow-has-margin vs-carousel pb-lg-50" data-slidetoshow="3" data-dots="true"
                                data-xldots="true" data-mldots="true" data-lgdots="true" data-mdslidetoshow="2"
                                data-smslidetoshow="2" data-xsslidetoshow="1">
                                <div class="col-xl-4">
                                    <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30">
                                        <span class="service-icon text-theme d-block mb-30"><i
                                                class="flaticon-fork icon-3x"></i></span>
                                        <h3 class="service-title link-inherit mb-10">Catering</h3>
                                        <p class="service-text mb-0">Synergistically envisioneer client centered
                                            functionalities for go forward data world.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30">
                                        <span class="service-icon text-theme d-block mb-30"><i
                                                class="flaticon-serving-dish icon-3x"></i></span>
                                        <h3 class="service-title link-inherit mb-10">Dinner</h3>
                                        <p class="service-text mb-0">Synergistically envisioneer client centered
                                            functionalities for go forward data world.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30">
                                        <span class="service-icon text-theme d-block mb-30"><i
                                                class="flaticon-flag icon-3x"></i></span>
                                        <h3 class="service-title link-inherit mb-10">Wedding</h3>
                                        <p class="service-text mb-0">Synergistically envisioneer client centered
                                            functionalities for go forward data world.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30">
                                        <span class="service-icon text-theme d-block mb-30"><i
                                                class="flaticon-confetti icon-3x"></i></span>
                                        <h3 class="service-title link-inherit mb-10">Birthday</h3>
                                        <p class="service-text mb-0">Synergistically envisioneer client centered
                                            functionalities for go forward data world.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
     Testimonial Area
    ==============================-->
    <section class="vs-testimonial-wrapper vs-testimonial-layout2 background-image bg-auto bg-fixed mb-70 mb-lg-80"
        data-overlay="dark" data-opacity="8" data-vs-img="/frontend/assets/img/about/testimonial-bg-2-1.jpg"
        id="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="testimonial-text-area text-center py-lg-150 pt-60 pb-80 vs-carousel"
                        id="testimonial-text-slide" data-asnavfor="#testimonial-name-slide, #testimonial-avater-slide"
                        data-slidetoshow="1" data-fade='true'>
                        <div class="testimonial-text-slide">
                            <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                            <p class="testimonial-text text-white text-20">“testimonials 1 ”</p>
                        </div>
                        <div class="testimonial-text-slide">
                            <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                            <p class="testimonial-text text-white text-20">“ testimonials 2”</p>
                        </div>
                        <div class="testimonial-text-slide">
                            <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                            <p class="testimonial-text text-white text-20">“ testimonials 3 ”</p>
                        </div>
                        <div class="testimonial-text-slide">
                            <span class="text-white d-block mb-20"><i class="text-theme flaticon-quotes icon-7x"></i></span>
                            <p class="testimonial-text text-white text-20">“ testimonials 4”</p>
                        </div>
                        <div class="testimonial-text-slide">
                            <span class="text-white d-block mb-20"><i
                                    class="text-theme flaticon-quotes icon-7x"></i></span>
                            <p class="testimonial-text text-white text-20">“ testimonials 5 ”</p>
                        </div>
                        <div class="testimonial-text-slide">
                            <span class="text-white d-block mb-20"><i
                                    class="text-theme flaticon-quotes icon-7x"></i></span>
                            <p class="testimonial-text text-white text-20">“ testimonials 6 ”</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 position-relative">
                    <div class="testimonial-author-box1 vs-carousel bg-white position-absolute radius-10 px-15 px-md-40 px-lg-80 pt-40 pt-lg-50 pb-40 pb-lg-45"
                        id="testimonial-name-slide" data-asnavfor="#testimonial-text-slide, #testimonial-avater-slide"
                        data-slidetoshow="1" data-arrows="true" data-xlarrows="true" data-mlarrows="true"
                        data-lgarrows="true" data-mdarrows="true" data-smarrows="true" data-xsarrows="true"
                        data-fade="true">
                        <div>
                            <h2 class="h3 testimonial-author-name mb-0">Algernon Freddy</h2>
                            <strong class="testimonial-author-degi text-theme">Managing Director</strong>
                        </div>
                        <div>
                            <h2 class="h3 testimonial-author-name mb-0">Jamaica Roise</h2>
                            <strong class="testimonial-author-degi text-theme">Managing Director</strong>
                        </div>
                        <div>
                            <h2 class="h3 testimonial-author-name mb-0">Vivi Marian</h2>
                            <strong class="testimonial-author-degi text-theme">Founder</strong>
                        </div>
                        <div>
                            <h2 class="h3 testimonial-author-name mb-0">Marko Polo</h2>
                            <strong class="testimonial-author-degi text-theme">Chef Leader</strong>
                        </div>
                        <div>
                            <h2 class="h3 testimonial-author-name mb-0">Jerzzy Lamot</h2>
                            <strong class="testimonial-author-degi text-theme">Board Member</strong>
                        </div>
                        <div>
                            <h2 class="h3 testimonial-author-name mb-0">Tahera Raj</h2>
                            <strong class="testimonial-author-degi text-theme">Board Member</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
      Team Area
    ==============================-->
    @endsection
