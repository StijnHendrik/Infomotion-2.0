@extends('layouts.app')
@section('content')
    <div class="section" id="presentation">
        <div class="container">
            <div class="row valign-wrapper">
                <div class="col s12 m6">
                    <img src="{{URL::asset('/images/smartmockups.png')}}" alt="Digital big-screen">
                </div>
                <div class="col s12 m6 center">
                    <h1>Infomotion</h1>
                    <h4>Digital information in motion</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container valign-wrapper" id="home">
        <div class="row center-align " id="section1">
            <div class="col s12">
                <h2>Main Features</h2>
            </div>
            <div class="col s12 m4">
                <!-- Promo Content 1 goes here -->
                <div class="mainIcon">
                    <i class="fal fa-camera-retro"></i>
                </div>
                <h4>Central Control</h4>
                <p>Digital signage management software with a powerful web-based administration environment. Scalable
                    and secure server-based management, distribution and playback engine.</p>
            </div>
            <div class="col s12 m4">
                <div class="mainIcon">
                    <i class="fal fa-tv"></i>
                </div>
                <h4> Flexible Layouts</h4>
                <!-- Promo Content 2 goes here -->
                <p>Web-based editor to create layout templates and animated posters including videos, slideshows,
                    images, styled text,
                    feeds and QR codes. Responsive design for automated adaptation to resolution and orientation of
                    target screens.</p>
            </div>
            <div class="col s12 m4">
                <div class="mainIcon">
                    <i class="fal fa-cogs"></i>
                </div>
                <h4>Ready-to-use Apps </h4>
                <!-- Promo Content 3 goes here -->
                <p>Clever apps, tools and modules can be easily integrated in content slides and animated posters.
                    Intelligent bricks
                    allow to use external data feeds, ad servers, webcams, news, market data or weather forecast.</p>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{URL::asset('/images/app.jpg')}}" class="ourProduct"></div>
    </div>


@endsection

