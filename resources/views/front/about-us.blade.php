@extends('front.layouts.app')

@section('content')
  
   
    <div class="bg bg-secondary app-py-3 app-image-gradient "
        style="
    background: url({{ asset('front/images/site/Gradient.webp') }});
    background-color: rgba(0, 0, 0, 0);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-size: auto;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  ">
        <div class="container">
            <div class=" row container">
                <div class="col l6 s12"><br>
                    <h2 class="app-mobile-center white-text">Seven Years of Impeccable Service</h2>
                    <p class="app-text-justify light-text f-24">{{ config('app.name') }} was founded in 2014 by a group of
                        professionals
                        who are artfully combining the technical expertise required to Copy Professional Traders (If you
                        can’t
                        trade on your own).</p>
                    <p class="app-text-justify light-text f-24">Forex Trading, Crypto Currency Trading and Stock Trading
                        with
                        a dedicated corporate team, state of the art headquarters and a passion for helping those with a
                        strong
                        desire to improve their lives</p>
                </div>
                <div class="col l6 s12">
                    <center>
                        <img src="{{ asset('front/images/site/7.png') }}" class="responsive-img"
                            style="max-height: 40vh;"><br>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <section class="bg bg-secondary app-py-3 bg-gradient-charity">
        <div class="container row app-py-3">
            <div class="col l6 s12">
                <h2 class="wow fadeInUp slow" style= "visibility: visible; animation-name: none;">Our Charity Missions</h2>
                <br>
                <p class="f-20 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">We believe everyone
                    has
                    the right to a decent life. So, we channel a part of our earnings to bring positive change to local
                    communities.</p><br>
                <p class="f-20 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
                    {{ config('app.name') }} partners
                    with trusted humanitarian organizations and on-site volunteers to deliver emergency aid to disaster
                    victims and run awareness and education programs. We also help vulnerable communities to overcome
                    poverty
                    and ensure healthy growth.</p>
            </div>
            <div class="col l6 s12 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
                <center><img src="{{ asset('front/images/site/Heart.png') }}" class="responsive-img"
                        style="max-height: 350px;"></center>
            </div>
        </div>
    </section>
    <div class="bg app-py-2 ">
        <div class="row container">
            <h3 class="center">What is Bitcoin Mining?</h3><br>
            <div class="video-container"><iframe width="853" height="480"
                    src="https://www.youtube.com/embed/GmOzih6I1zs" frameborder="0" allowfullscreen=""></iframe></div>
        </div>
    </div>
    <section class="bg center app-py-3">
        <div class="container">
            <div class="row">
                <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: none;"><img
                        src="{{ asset('front/images/site/ServiceVector3.png') }}" class="responsive-img">
                    <h3 class="h4">Daily Mining Outputs</h3>
                    <p class="app-mb-2">Returns made from either trading or mining transactions will be added to your
                        account
                        daily and automatically.</p>
                </div>
                <div class="app-my-2 col l4 s12 wow fadeInUp" style= "visibility: visible; animation-name: none;"><img
                        src="{{ asset('front/images/site/ServiceVector1.png') }}" class="responsive-img">
                    <h3 class="h4">State of the Art Mining</h3>
                    <p class="app-mb-2">Productivity is a top notch quality for any investment. So, for every trade action
                        or
                        blockchain mining algorithm that we offer, we’re providing some of the highest performing systems
                        and
                        softwares that exist</p>
                </div>
                <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: none;"><img
                        src="{{ asset('front/images/site/ServiceVector2.png') }}" class="responsive-img">
                    <h3 class="h4">Diverse Mining Portfolio</h3>
                    <p class="app-mb-2">Choose from a wide range of target assets for trading and over 10 major mining
                        algorithms that cut across 4 mineable cryptocurrencies</p>
                </div>
            </div>
            <div class="row">
                <div class="app-my-2 col l4 s12 wow fadeInUp" style= "visibility: visible; animation-name: none;"><img
                        src="{{ asset('front/images/site/ServiceVector45.png') }}" class="responsive-img">
                    <h3 class="h4">Hardware is already running</h3>
                    <p class="app-mb-2">Don’t wrestle with rig assembly and hot, noisy miners at home. We have the fastest
                        bitcoin mining hardware running for you already</p>
                </div>
                <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: none;"><img
                        src="{{ asset('front/images/site/ServiceVector55.png') }}" class="responsive-img">
                    <h3 class="h4">Intuitive Dashboard</h3>
                    <p class="app-mb-2">All the financial instruments data and charts that you need, when you need them</p>
                </div>
                <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: none;"><img
                        src="{{ asset('front/images/site/ServiceVector65.png') }}" class="responsive-img">
                    <h3 class="h4">Secure and Private</h3>
                    <p class="app-mb-2">We value the privacy of our users, so we strive to keep collected user data to a
                        minimum level.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg app-pt-3 app-image-dots"
        style="
      background: url({{ asset('front/images/site/Dots.png') }});
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-size: auto;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    ">
        <div class="container">
            <h2 class="center  wow fadeInUp slow" style= "visibility: visible; animation-name: none;">What Our Users Say
            </h2>
            <p class="center">See what our customer say about us</p><br><br>
            <div class="container row center app-pt-3">
                <div class="col l3 s12 app-py-1 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
                    <img src="{{ asset('front/images/site/p1.jpg') }}" class="circle"
                        style="max-height: 140px;"><br><b>Henri Pacocha</b>
                    <p class="app-px-1">I am extremely pleased with the platform, in terms of ease and speed of use and
                        reliability.</p><br>
                </div>
                <div class="col l3 s12 app-py-1 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
                    <img src="{{ asset('front/images/site/p4.jpeg') }}" class="circle"
                        style="max-height: 140px;"><br><b>Michelle Kings</b>
                    <p class="app-px-1">Very simple and secure method to add some interest to your investments</p><br>
                </div>
                <div class="col l3 s12 app-py-1 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
                    <img src="{{ asset('front/images/site/p3.png') }}" class="circle"
                        style="max-height: 140px;"><br><b>Molly Corwin</b>
                    <p class="app-px-1">I tripled the bitcoin in my wallet with this service in just 7 days.</p><br>
                </div>
                <div class="col l3 s12 app-py-1 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
                    <img src="{{ asset('front/images/site/p5.jpeg') }}" class="circle"
                        style="max-height: 140px;"><br><b>Lawson Robel</b>
                    <p class="app-px-1">Easy to use, risk-free trading platform that increases ones earning potential.</p>
                    <br>
                </div>
            </div>
        </div>
    </section>
@endsection
