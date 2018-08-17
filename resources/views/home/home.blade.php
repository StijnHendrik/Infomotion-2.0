@extends('layouts.app')
@section('content')
    <div class="section presentation">

            <div class="row landing ">
                <div class="col-md-12" >



                    <div class="col-md-6 callToAction text-center">
                        <img src="{{URL::asset('/img/logo.png')}}" alt="logo" class=" logo-inline">
                        <h4>Your digital information in motion</h4>
                        <br>
                        <h4>Register now and get a 2 week free trial !!</h4>
                        <div class="btn-container">
                            <a href="{{ route('register') }}" class="btn text-uppercase">Start your free trial!</a>
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
                <div class="col-md-6 intro-text">
                    <h1>Welcome on the website of Infomotion</h1>
<p> Infomotion could be your newest high tech marking panel in your bar or restaurant! <br>
    The Informotion is multi-use panel that displays many kinds of data. Do you want to visualize your menu of the day, or menu of the week?
    This can  easly be done with the Infomotion. Or if you want a slideshow of your dilicious food that your customers can see while they are ordering food.
It is all possible with the Informotion.
    </p>
                </div>
        </div>

    </div>


        <div class="row features" >
            <div class="col-md-12 text-center text-main">
                <h1>Main Features</h1>

            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <!-- Promo Content 1 goes here -->
                <div class="mainIcon ">
                    <i class="fas fa-camera-retro fa-9x"></i>
                </div>
                <h2>Central Control</h2>
                <p>Digital signage management software with a powerful web-based administration environment. Scalable
                    and secure server-based management, distribution and playback engine. Build on the latest technology as result this web application is highly secure.</p>
                <a class="btn " href="{{ route('register') }}">Register now!</a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <div class="mainIcon ">
                    <i class="fas fa-tv fa-9x"></i>
                </div>
                <h2> Flexible Layouts</h2>
                <!-- Promo Content 2 goes here -->
                <p>Web-based editor to create layout templates and animated posters including videos, slideshows,
                    images, styled text,
                    feeds and QR codes. Responsive design for automated adaptation to resolution and orientation of
                    target screens.</p>
                <a class="btn " href="{{ route('register') }}">Register now!</a>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <div class="mainIcon ">
                    <i class="fas fa-cogs fa-9x"></i>
                </div>
                <h2>Ready-to-use Apps </h2>
                <!-- Promo Content 3 goes here -->
                <p>Clever apps, tools and modules can be easily integrated in content slides and animated posters.
                    Intelligent bricks
                    allow to use external data feeds, ad servers, webcams, news, market data or weather forecast.</p>
                <a class="btn " href="{{ route('register') }}">Register now!</a>
            </div>
        </div>




@endsection

