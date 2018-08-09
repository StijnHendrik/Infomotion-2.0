@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts:</h1>
    <form action="/posts" enctype="multipart/form-data" method="post" files="true">
        @csrf
        <label for="title">Titel:</label>
        <input type="text" placeholder="title" name="title">

        <label for="text">Tekst:</label>
        <input type="text" placeholder="title" name="text">

        <label for="type_id">Titel:</label>
        <select name="type_id">
            @foreach($post_types as $post_type)
                <option value="{{ $post_type->id }}">{{ $post_type->type }}</option>
            @endforeach
        </select>

        <label for="start_position_x">Positie X:</label>
        <input type="number" min="1" max="3" name="position_x" value="1">

        <label for="start_position_y">Positie Y:</label>
        <input type="number" min="1" max="3" name="position_y" value="1">

        <label for="media">Foto:</label>
        <input type="file" name="media" id="media">

        <button type="submit">Toevoegen</button>

    </form>
    @foreach($posts as $post)
        <h4>{{ $post->title }}</h4>
        <p>{{ $post->posttype->type }}</p>
        @isset($post->media)
            @foreach($post->media as $media)
            <img src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}" width="200px">
            @endforeach
        @endisset
    @endforeach
</div>
@endsection