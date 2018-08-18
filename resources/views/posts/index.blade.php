@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('error'))
        <div class="notification-error">
            <h2>{{ session('error') }}</h2>
        </div>
    @endif
    <h1>Posts:</h1>
    <form action="/posts" enctype="multipart/form-data" method="post" files="true">
        @csrf
        <label for="title">Titel:</label>
        <input type="text" placeholder="title" name="title">

        <label for="text">Tekst:</label>
        <input type="text" placeholder="text" name="text">

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
        <input type="file" name="media[]" id="media" multiple>

        <label for="published">Publiceer:</label>
        <input type="checkbox" name="published">Publiceer


        <button type="submit">Toevoegen</button>

    </form>
    <div class="row">
    @foreach($posts as $post)
        <div class="col-3">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->text }}</p>
            <p>Positie x: {{ $post->start_position_x }} Positie y: {{ $post->start_position_y }}</p>
            <p>{{ $post->published }}</p>
            @isset($post->media)
                @foreach($post->media as $media)
                <img src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}" width="200px">
                <form method="post" action="/media/{{ $media->id }}">
                    @method('delete')
                    @csrf
                    <button type="submit">Verwijder afbeelding</button>
                </form>
                @endforeach
            @endisset
            <a href="{{ url('posts/'.$post->id) }}">bewerk</a>
            <form method="post" action="/posts/{{ $post->id }}">
                @method('delete')
                @csrf
                <button type="submit">Verwijder</button>
            </form>
        </div>
    @endforeach
    </div>
</div>
@endsection