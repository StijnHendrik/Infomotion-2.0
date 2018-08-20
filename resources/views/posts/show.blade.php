@extends('layouts.app')

@section('content')

    <div class="container-fluid dashboard">
        <div class="row">

            <div class="col-md-4">
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



            <div class="col-md-7">
                <h1>{{ $post->title }}</h1>
                <br>
        @if(session('error'))
            <div class="row">
                <div class="notification-error">
                    <h2>{{ session('error') }}</h2>
                </div>
            </div>
        @endif


        <form action="/updatepost" method="post" >
            @csrf

            <div class="form-group row">
                <input type="hidden" name="post_id" value="{{ $post->id }}">

                <label for="title" class="col-2 col-form-label">Title:</label>
                <div class="col-md-5 col-sm-8">
                    <input type="text" name="title" class="input-txt" value="{{ $post->title }}">
                </div>
            </div>

            <div class="form-group row">


                <label for="title" class="col-2 col-form-label">Text:</label>
                <div class="col-md-5 col-sm-8">
                    <input type="text" name="text" class="input-txt" value="{{ $post->text }}">
                </div>
            </div>

            <div class="form-group row">


                <label for="title" class="col-2 col-form-label">Position X:</label>
                <div class="col-md-5 col-sm-8">
                    <input type="text" name="position_x" class="input-txt" value="{{ $post->start_position_x }} ">
                </div>
            </div>


            <div class="form-group row">


                <label for="title" class="col-2 col-form-label">Position Y:</label>
                <div class="col-md-5 col-sm-8">
                    <input type="text" name="position_y" class="input-txt" value="{{ $post->start_position_y }} ">
                </div>
            </div>



            <div class="col-6">
                <label for="text">Publiceren (slechts 1 publiceren per positie):</label>
                <input type="checkbox" name="published" {{ $post->published ==  'on' ? 'checked' : '' }}>
            </div>


            <button type="submit" class="btn">Adjust</button>
            </form>
            <div class="row media-image">
            @isset($post->media)
                @foreach($post->media as $media)
                    <div class="col-4">
                        <img src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}">
                        <form method="post" action="/media/{{ $media->id }}">
                            @method('delete')
                            @csrf
                            <button type="submit">Verwijder afbeelding</button>
                        </form>
                    </div>
                @endforeach
            @endisset
            </div>
                <br>
                <br>
            <div >
                {{--<a href="{{ url('posts/'.$post->id) }}">bewerk</a>--}}
                <form method="post" action="/posts/{{ $post->id }}">
                    @method('delete')
                    @csrf
                    <button class="btn" type="submit">Remove</button>
                </form>
            </div>
    </div>


        </div>

    </div>
@endsection