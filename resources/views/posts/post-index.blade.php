@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <h1>Your Posts</h1>
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->body }}</p>
                </div>
                <div class="card-footer">
                    <a href="posts/{{ $post->id }}" class="btn btn-info">View Post</a>
                    <a href="posts/{{ $post->id }}/edit" class="btn btn-warning">Edit Post</a>
                    <a href="posts/{{ $post->id}}/delete" class="btn btn-danger"[onclick]="areYouSure({{ $post->id }})">Delete Post</a>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row" style="margin-top: 20px;">
            <a href="posts/create" class="btn btn-success">Create Post</a>
        </div>
    </div>

@endsection