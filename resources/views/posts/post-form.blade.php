@extends('layouts.app')


@section('content')

 <div class="container">
    <div class="row">

        @foreach($errors->all() as $message)
        <div>{{ $message }}</div>
        @endforeach

        <div class="card">
            <div class="card-body">
                <h3>{{ $create ? "Create Post" : "Edit Post" }}</h3>
                <form action="{{ $create ? route('posts.create') : route('posts.update', ['id' => $post->id]) }}" method="POST">
                @if(!$create)
                <input type="hidden" name="_method" value="PUT">
                @endif
                {{ csrf_field() }}

                <input type="text" name="body" value="{{ old('body', isset($post) ? $post->body : '') }}">

                <input type="submit">
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection