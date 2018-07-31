@extends('layouts.app')

@section('content')
    <h1>Posts:</h1>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
        <li>{{ $post->posttype->type }}</li>
        @isset( $post->media)
            @foreach($post-media as $media)
                <p>{{ $media->id }}</p>
            @endforeach
        @endisset
    @endforeach

@endsection