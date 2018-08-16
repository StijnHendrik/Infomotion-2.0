@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-4">
<ul>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('grid') }}">Grid</a>
    </li>
</ul>
        </div>

        <div class="col-md-8">

        </div>
    </div>
</div>


@endsection