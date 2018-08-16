@extends('layouts.app')

@section('content')
<div class="container-fluid dashboard">
    <div class="row">

        <div class="col-md-4">
<ul class="vertical-menu">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('grid') }}">Grid</a>
    </li>
</ul>
        </div>



        <div class="col-md-8">


            <h1>Welcome to the dashboard of Infomotion</h1>

            <p>
                Here you can set all the settings of 
            </p>
        </div>
    </div>
</div>


@endsection