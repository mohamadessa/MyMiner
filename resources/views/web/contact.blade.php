@extends('layouts.web')

@section('content')
    <!-- main area start  -->

    <main>

        <!-- breadcrumb start -->
        <section class="breadcrumb bg_img pos-rel" data-background="{{ asset('assets/img/bg/breadcrumb.jpg') }}">
            <div class="container">
                <div class="breadcrumb__content">
                    <h2 class="breadcrumb__title">Contact Us</h2>
                    <ul class="bread-crumb clearfix ul_li_center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb__icon">
                <div class="icon icon--1">
                    <img class="leftToRight" src="{{ asset('assets/img/icon/bi_01.png') }}" alt="">
                </div>
                <div class="icon icon--2">
                    <img class="topToBottom" src="{{ asset('assets/img/icon/bi_02.png') }}" alt="">
                </div>
                <div class="icon icon--3">
                    <img class="topToBottom" src="{{ asset('assets/img/icon/bi_03.png') }}" alt="">
                </div>
                <div class="icon icon--4">
                    <img class="leftToRight" src="{{ asset('assets/img/icon/bi_04.png') }}" alt="">
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->

        <!-- contact start -->
        <section class="contact-info pt-130 pb-120">
            <div class="container">
                <div class="row justify-content-md-center mt-none-30">
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="contact-info__item xb-border text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/location.svg') }}" alt="">
                            </div>
                            <h3>Location</h3>
                            <p>
                                Sunshine Business Park <br> Sector-94,Poland
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="contact-info__item xb-border text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/call.svg') }}" alt="">
                            </div>
                            <h3>Contact</h3>
                            <p>
                                <a href="tel:+88(0)555-0108">+88(0) 555-0108</a> <br>
                                <a href="tel:+88(0)555-01117">+88(0) 555-01117</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="contact-info__item xb-border text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/mail.svg') }}" alt="">
                            </div>
                            <h3>Email</h3>
                            <p>
                                <a href="mailto:info@cryco.com">info@cryco.com</a> <br>
                                <a href="mailto:example@cryco.com">example@cryco.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact end -->

        <!-- google map start -->
        <section class="google-map">
            <div class="google-map__inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.1148825201712!2d37.43410051194115!3d37.00705557207283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e7bb4eb570a1%3A0x7b3c32754b83a6a9!2sHasan%20Kalyoncu%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1731970771183!5m2!1str!2str"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>
        <!-- google map end -->

    </main>
    <!-- main area end  -->
@endsection
