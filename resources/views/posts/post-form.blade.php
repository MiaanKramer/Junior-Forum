@extends('layouts.app')


@section('content')

 <div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h3>{{ $create ? "Create Post" : "Edit Post" }}</h3>
                <form action="submit">
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection