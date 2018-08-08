@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Grid</h1>

    <div id="grid" class="grid">
        <div class="grid-item">1</div>
        <div class="grid-item">1</div>
        <div class="grid-item">1</div>
        <div class="grid-item" data-column-start="1" data-column-end="3" data-row-start="3">de kortere</div>
        <div class="grid-item">1</div>
        <div class="grid-item" data-column-start="2" data-column-end="4" data-row-start="3">de langere</div>
        <div class="grid-item">1</div>
        <div class="grid-item">1</div>
        <div class="grid-item">1</div>
    </div>
    </div>
</div>
@endsection
