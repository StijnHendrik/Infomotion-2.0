@extends('layouts.app')
@section('content')
    <div class="section presentation">

            <div class="row landing ">
                <div class="col-md-12" >



                    <div class="col-md-6 callToAction">
                        <img src="{{URL::asset('/img/logo.png')}}" alt="logo" class=" logo-inline">
                        <h4>Your digital information in motion</h4>
                        <div class="btn-container">
                            <a href="#" class="btn text-uppercase">Read More!</a>
                        </div>
                    </div>
                </div>



        </div>
    </div>

    <div class="container ">
        <div class="row intromotion">
            <div class="col-md-6">
                <img src="{{URL::asset('/img/infomotion.jpg')}}" alt="bar or restaurant" class=" foto">
            </div>
                <div class="col-md-6">
<p> Infomotion could be your newest high tech marking panel in your bar or restaurant
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
        </div>

    </div>


        <div class="row features" >
            <div class="col-md-12 text-align-center text-center">
                <h1>Main Features</h1>
                <br>
                <br>
            </div>
            <div class="col-md-4 col-sm-12">
                <!-- Promo Content 1 goes here -->
                <div class="mainIcon">
                    <i class="fal fa-camera-retro"></i>
                </div>
                <h4>Central Control</h4>
                <p>Digital signage management software with a powerful web-based administration environment. Scalable
                    and secure server-based management, distribution and playback engine.</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
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
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
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
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
        </div>




@endsection

