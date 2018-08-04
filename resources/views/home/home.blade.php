@extends('layouts.app')
@section('content')
    <div class="section presentation">

            <div class="row landing ">
                <div class="col-md-12" >

                        {{--<img src="{{URL::asset('/img/bar-1.jpg')}}" alt="bar or restaurant" class="landingsfoto">--}}

                    <div class="col-md-3 callToAction">
                        <h1>Infomotion</h1>
                        <h4>Digital information in motion</h4>
                        <div class="btn-container">
                            <a href="#" class="btn">Read More!</a>
                        </div>
                    </div>
                </div>



        </div>
    </div>
    <div class="container intro" >
        <div class="row  " id="section1">
            <div class="col-md-12 text-align-center text-center">
                <h2>Main Features</h2>
            </div>
            <div class="col-md-4 col-sm-12">
                <!-- Promo Content 1 goes here -->
                <div class="mainIcon">
                    <i class="fal fa-camera-retro"></i>
                </div>
                <h4>Central Control</h4>
                <p>Digital signage management software with a powerful web-based administration environment. Scalable
                    and secure server-based management, distribution and playback engine.</p>
            </div>
            <div class="col-md-4 col-sm-12">
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
            <div class="col-md-4 col-sm-12">
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



@endsection

