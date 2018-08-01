@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts:</h1>
    @foreach($posts as $post)
        <h4>{{ $post->title }}</h4>
        <p>{{ $post->posttype->type }}</p>
        @isset($post->media)
            @foreach($post->media as $media)
            <img src="{{ $media->source }}" alt="{{ $media->alt }}" width="200px">
            @endforeach
        @endisset
    @endforeach
</div>
@endsection