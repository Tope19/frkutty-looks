@extends('web.layouts.app1')
@section('title')
About-Us
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
                    <div class="as-text ap-text">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>About FruttyLooks</h2>
                        </div>
                        <p class="f-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. </p>
                        <p class="s-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod.Tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. </p>
    </section>
    <!-- About Us Section End -->

    <!-- Member Section Begin -->
    <section class="member-section spad ap-member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Models</span>
                        <h2>Previous Gigs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/frutty2.jpeg') }}">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/frutty3.jpeg') }}">
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/frutty4.jpeg') }}">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/frutty5.jpeg') }}">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/frutty6.jpeg') }}">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="{{ asset('web/img/frutty8.jpeg') }}">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Member Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto-section set-bg" data-setbg="{{ asset('web/img/ctc-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="ctc-text">
                        <h2>We make you look good for any occassion</h2>
                        <p>Donec faucibus consequat ante. Mauris eget mi sed ex efficitur porta id non quam. Cras
                            aliquam turpis tellus, quis laoreet lacus congue sed. Nullam at est quis urna vestibulum
                            interdum. Praesent auctor leo ut massa ultrices tempor.</p>
                        <a href="#" class="primary-btn ctc-btn">Book an appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

@endsection
