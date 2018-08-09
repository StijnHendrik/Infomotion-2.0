@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Grid</h1>

    <div id="grid" class="grid">
        @foreach($posts as $post)
            <div class="grid-item" data-column-start="{{ $post->start_position_x }}" data-column-end="{{ $post->end_position_x }}" data-row-start="{{ $post->start_position_y }}" data-row-end="{{ $post->end_position_y }}">
                {{ $post->posttype->type }}
                @isset($post->media)
                    @foreach($post->media as $media)
                        <img src="{{ $media->source }}" alt="{{ $media->alt }}" width="20%">
                    @endforeach
                @endisset
            </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
