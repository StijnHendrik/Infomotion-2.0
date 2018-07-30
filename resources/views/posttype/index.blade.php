@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posttypes:</h1>
        @foreach ($posttypes as $posttype)
            <li>{{ $posttype->id }}</li>
        @endforeach
    </div>
@endsection
