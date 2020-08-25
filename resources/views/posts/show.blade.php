@extends('base')@section('main')
    <div class="col-sm-12 offset-sm-2 pt-4">
        <div class="row">
            <h1 class="display-8">{{ $post->title }}</h1>
            <a href="{{ route('index') }}" class="btn btn-secondary ml-4 m-2 pt-2">Domov</a>
        </div>
        <div>
            <div class="pb-2">
                <h4>{{ $post->author }}</h6>
            </div>
            <p>{{ $post->body }}</p>
        </div>
        <div>
            <a href="{{ route('comments.create', ['post_id'=>1]) }}" class="btn btn-primary">Oddaj komentar</a>
        </div>
    </div>
@endsection
