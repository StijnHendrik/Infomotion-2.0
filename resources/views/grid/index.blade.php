@extends('layouts.app')

@section('content')
<div class="container">
    <h1 id="grid-header">Grid</h1>

    <div id="grid" class="grid">
        @foreach($posts as $post)
            @if($post->type = 'media')
                @isset($post->media)
                    <div class="grid-item__media" data-column-start="{{ $post->start_position_x }}" data-column-end="{{ $post->end_position_x }}" data-row-start="{{ $post->start_position_y }}" data-row-end="{{ $post->end_position_y }}">
                        @foreach($post->media as $media)
                            <img class="slide" src="{{ url('/images/upload/').'/'.$media->source }}" alt="{{ $media->alt }}" data-test="{{ $loop->index }}">
                        @endforeach
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
</div>
<script src="{{ asset('js/grid.js') }}" defer></script>
@endsection
