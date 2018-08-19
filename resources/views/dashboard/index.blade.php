@extends('layouts.app')

@section('content')
<div class="container-fluid dashboard">
    <div class="row">

        <div class=" col-md-4 col-sm-12">
<ul class="vertical-menu">

    <li class="vertical-menu-item">
        <a class="nav-link" href="{{ route('dashboard') }}">Index</a>
    </li>
    <li class="vertical-menu-item">
        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
    </li>
    <li class="vertical-menu-item">
        <a class="nav-link" href="{{ route('grid') }}">Grid</a>
    </li>
</ul>
        </div>



        <div class="col-md-7 col-sm-12 dashboard-intro">


            <h1>Welcome to the dashboard of Infomotion</h1>

            <p>
                Here you can manage all the settings for the infomotion screen! <br>Do you want to visualize your menu of the day, or menu of the week?
            </p><p> This can  easly be done with the Infomotion. <br> If you like to have a slideshow of your
                dilicious food which your customers can see while they are ordering food.
            </p> <p>  It is all possible with the Informotion.
            </p>

            <div class="cta">
                <a href="{{ route('posts.index') }}" class="btn text-uppercase">Customize your infomotion!</a>
                <a href="{{ route('grid') }}" class="btn text-uppercase">Go to the infomotion!</a>

            </div>
        </div>
    </div>
</div>


@endsection