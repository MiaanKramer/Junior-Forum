@extends ('layouts.app')

@section ('content')

    <div class="container">
        <div class="row">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </div>
        @foreach($comments as $comment)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $comment->id }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $comment->content }}</p>
                </div>
            </div>
        @endforeach

    </div>

@endsection