@extends('web.layouts.app')
@section('title')
Home
@endsection
@section('content')
    <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="{{ asset('web/img/frutty1.jpeg') }}" alt="" class="frut">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>About FruttyLooks</h2>
                        </div>
                        <p class="f-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. </p>
                        <p class="s-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('web/img/services/service-1.png') }}" alt="">
                        <h4>Make over for all occasions</h4>
                        <p>Brook embraces a modern look with various enhanced pre-defined page elements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('web/img/services/service-2.png') }}" alt="">
                        <h4>Hair styling</h4>
                        <p>Brook embraces a modern look with various enhanced pre-defined page elements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('web/img/services/service-3.png') }}" alt="">
                        <h4>Make Up</h4>
                        <p>Brook embraces a modern look with various enhanced pre-defined page elements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Call To Action Section Begin -->
    <section section class="portfolio-section spad" data-setbg="{{ asset('web/img/ctc-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="ctc-text">
                        <h2>We Create Trends For The World</h2>
                        <p>Donec faucibus consequat ante. Mauris eget mi sed ex efficitur porta id non quam. Cras
                            aliquam turpis tellus, quis laoreet lacus congue sed. Nullam at est quis urna vestibulum
                            interdum. Praesent auctor leo ut massa ultrices tempor.</p>
                        <a href="#" class="primary-btn ctc-btn">Work With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Member Section Begin -->
    <section class="member-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Top Designers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/member/member-1.jpg') }}">
                        <div class="mi-text">
                            <p>Quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <div class="mt-title">
                                <h4>Jacob Gomez</h4>
                                <span>Designer</span>
                            </div>
                            <div class="mt-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/member/member-2.jpg') }}">
                        <div class="mi-text">
                            <p>Quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <div class="mt-title">
                                <h4>Jacob Gomez</h4>
                                <span>Designer</span>
                            </div>
                            <div class="mt-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/member/member-3.jpg') }}">
                        <div class="mi-text">
                            <p>Quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <div class="mt-title">
                                <h4>Jacob Gomez</h4>
                                <span>Designer</span>
                            </div>
                            <div class="mt-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Member Section End -->
@endsection
