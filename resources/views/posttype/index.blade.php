@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posttypes:</h1>
        @foreach ($posttypes as $posttype)
            <li>{{ $posttype->id }}</li>
                @isset($posttype->post)
                    @foreach($posttype->post as $post)
                    <li>{{ $post->text }}</li>
                    @endforeach
                @endisset
        @endforeach
    </div>
@endsection
