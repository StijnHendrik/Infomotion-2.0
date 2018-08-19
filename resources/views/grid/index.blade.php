<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Infomotion</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-16x16.ico') }}">

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg" color="#5bbad5') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div id="grid" class="grid">
        @foreach($posts as $post)
            @if($post->type = 'media')
                <div class="grid-item grid-item__media carousel" data-ride="carousel" data-column-start="{{ $post->start_position_x }}" data-column-end="{{ $post->end_position_x }}" data-row-start="{{ $post->start_position_y }}" data-row-end="{{ $post->end_position_y }}">
                @isset($post->media)
                    <div class="carousel-inner">
                        @foreach($post->media as $media)
                            <div class="carousel-item {{ $loop->index == 0? 'active' : '' }}">
                                <img class="slide" src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}" data-test="{{ $loop->index }}">
                            </div>
                        @endforeach
                    </div>
                @endisset
                </div>
            @else
            <div class="grid-item" data-column-start="{{ $post->start_position_x }}" data-column-end="{{ $post->end_position_x }}" data-row-start="{{ $post->start_position_y }}" data-row-end="{{ $post->end_position_y }}">
                <div class="row">
                    <div class="col">
                    {{ $post->title }}
                    </div>
                </div>
                @isset($post->media)
                    <div class="row">
                    @foreach($post->media as $media)
                        <div class="col">
                            <img src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}" width="20%">
                        </div>
                    @endforeach
                    </div>
                @endisset
            </div>
            @endif
        @endforeach
    </div>
</div>
<script src="{{ asset('js/grid.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>