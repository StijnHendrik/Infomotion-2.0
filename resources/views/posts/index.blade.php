@extends('layouts.app')

@section('content')


    <div class="container-fluid dashboard">
        <div class="row">

            <div class="col-md-3 col-sm-12">
                <ul class="vertical-menu">

                    <li class="vertical-menu-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Index</a>
                    </li>
                    <li class="vertical-menu-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                    </li>
                    <li class="vertical-menu-item">
                        <a class="nav-link" href="{{ route('grid') }}">Grid</a>
                    </li>
                </ul>
            </div>



            <div class="col-md-9 col-sm-12 dashboard-intro">
                <div class=" post">
                    @if(session('error'))
                        <div class="notification-error">
                            <h2>{{ session('error') }}</h2>
                        </div>
                    @endif
                    <h2>Posts page: On this page you can manage all your Infomotion settings</h2>
                        <br>
                        <br>
                    <form action="/posts" enctype="multipart/form-data" method="post" files="true" class="">
                        @csrf
                        <div class="form-group row">
                        <label for="title" class="col-2 col-form-label">Titel:</label>
                            <div class="col-5">
                        <input type="text" placeholder="title" name="title" class="input-txt">
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="text" class="col-2 col-form-label">Tekst:</label>
                            <div class="col-5">
                        <input type="text" placeholder="text" name="text" class="input-txt">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="type_id" class="col-2 col-form-label">Titel:</label>
                            <div class="col-5">
                        <select name="type_id" class="input-txt">
                            @foreach($post_types as $post_type)
                                <option value="{{ $post_type->id }}">{{ $post_type->type }}</option>
                            @endforeach
                        </select>
                        </div>
                        </div>

                            <div class="form-group row">
                        <label for="start_position_x" class="col-2 col-form-label">Positie X:</label>
                                <div class="col-5">
                        <input type="number" min="1" max="3" name="position_x" value="1" class="input-txt">
                            </div>
                            </div>
                        <div class="row form-group">

                            <label for="start_position_y" class="col-2 col-form-label">Positie Y:</label>
                            <div class="col-5">
                            <input type="number" min="1" max="3" name="position_y" value="1" class="input-txt">
                            </div>
                        </div>

                        <div class="row form-group">
                            <label for="media" class="col-2 col-form-label">Foto:</label>
                            <div class="col-10">
                            <input type="file" class="button btn-secondary" name="media[]" id="media" multiple>
                            </div>
                        </div>

        <label for="published">Publiceer:</label>
        <input type="checkbox" name="published">
                        <div class="row">
                            <div class="offset-col-md-2">
                                <button type="submit" class="btn">Toevoegen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="table-responsive offset-3">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Published</th>
                    <th scope="col">Content</th>
                    <th scope="col">Position X:Y</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $loop->index }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->published == 'on' ? 'published' : 'unpublished' }}</td>
                        <td>{{ $post->text }}</td>
                        <td><strong>X: {{ $post->start_position_x.' | Y: '.$post->start_position_y }}</strong></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
@endsection