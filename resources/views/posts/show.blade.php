@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('error'))
            <div class="row">
                <div class="notification-error">
                    <h2>{{ session('error') }}</h2>
                </div>
            </div>
        @endif
        <h1>{{ $post->title }}</h1>
        <form action="/updatepost" method="post" class="row">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="col-6">
                <label for="name">Titel:</label>
                <input type="text" name="title" value="{{ $post->title }}">
            </div>

            <div class="col-6">
                <label for="text">Tekst:</label>
                <input type="text" name="text" value="{{ $post->text }}">
            </div>

            <div class="col-6">
                <label for="text">Positie X:</label>
                <input type="number" name="position_x" min="1" max="3" value="{{ $post->start_position_x }}">
            </div>

            <div class="col-6">
                <label for="text">Positie Y:</label>
                <input type="number" name="position_y" min="1" max="3" value="{{ $post->start_position_y }}">
            </div>

            <div class="col-6">
                <label for="text">Publiceren (slechts 1 publiceren per positie):</label>
                <input type="checkbox" name="published" {{ $post->published ==  'on' ? 'checked' : '' }}>
            </div>

            <button type="submit">Bijwerken</button>
            </form>
            <div class="row">
            @isset($post->media)
                @foreach($post->media as $media)
                    <div class="col-2">
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
            <div class="row">
                <a href="{{ url('posts/'.$post->id) }}">bewerk</a>
                <form method="post" action="/posts/{{ $post->id }}">
                    @method('delete')
                    @csrf
                    <button type="submit">Verwijder</button>
                </form>'
            </div>
    </div>
@endsection