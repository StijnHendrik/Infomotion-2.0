@extends('layouts.app')

@section('content')


    <div class="container-fluid dashboard">
        <div class="row">

            <div class="col-md-4 col-sm-12">
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



            <div class="col-md-7 col-sm-12 dashboard-intro">
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
                        <label for="title" class="col-2 col-form-label">Title:</label>
                            <div class="col-md-5 col-sm-8">
                        <input type="text" placeholder="title" name="title" class="input-txt">
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="text" class="col-2 col-form-label">Text:</label>
                            <div class="col-md-5 col-sm-8">
                        <input type="text" placeholder="text" name="text" class="input-txt">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="type_id" class="col-2 col-form-label">Type:</label>
                            <div class="col-md-5 col-sm-8">
                        <select name="type_id" class="form-control">
                            @foreach($post_types as $post_type)
                                <option value="{{ $post_type->id }}">{{ $post_type->type }}</option>
                            @endforeach
                        </select>
                        </div>
                        </div>

                            <div class="form-group row">
                        <label for="start_position_x" class="col-2 col-form-label">Position X:</label>
                                <div class="col-md-5 col-sm-8">
                        <input type="number" min="1" max="3" name="position_x" value="1" class="form-control">
                            </div>
                            </div>
                        <div class="row form-group">

                            <label for="start_position_y" class="col-2 col-form-label">Position Y:</label>
                            <div class="col-md-5 col-sm-8">
                            <input type="number" min="1" max="3" name="position_y" value="1" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <label for="media" class="col-2 col-form-label">Images:</label>
                            <div class="col-md-10 col-sm-7">
                            <input type="file"  class="button btn-secondary" name="media[]" id="media" multiple>
                            </div>
                        </div>

                        <div class="row form-group">
        <label class="col-2 col-form-label" for="published">Publish:</label>
                            <div class="col-md-5 col-sm-8">
        <input type="checkbox" name="published">
                            </div>
                        </div>

                        <div class="row">
                            <div class="offset-md-2">
                                <button type="submit" class="btn">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <div class="row ">
        <div class="overview table-responsive ">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Published</th>
                    <th scope="col">Content</th>
                    <th scope="col">Type</th>
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
<td>  {{ $post->posttype->type }}</td>
                        <td><strong>X: {{ $post->start_position_x.' | Y: '.$post->start_position_y }}</strong></td>
                    <td><a  href="{{ url('posts/'.$post->id) }}"><i class="edit fas fa-edit"></i></a></td>
                        <td>
                            <form method="post" action="/posts/{{ $post->id }}">
                                @method('delete')
                                @csrf
                                <button type="submit"><i class="fas fa-trash-alt"></i></button>

                            </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
@endsection