@extends('base')@section('main')
    <div class="col-sm-12 offset-sm-2 pt-4">
        <div class="row">
            <h1 class="display-5">{{ $post->title }}</h1>
            <a href="{{ route('index') }}" class="btn btn-secondary ml-4 m-2 pt-2">Domov</a>
        </div>
        <div>
            <div class="pb-2">
                <h4>{{ $post->author }}</h6>
            </div>
            <p>{{ $post->body }}</p>
        </div>
        <div class="col-sm-6 pt-5">
            <h3 class="display-5">Komentarji</h3>
        </div>
        <div class="col-sm-6 ">
            <a href="{{ route('comments.create') }}?post_id={{ $post->id }}" class="btn btn-primary">Napisi nov komentar</a>
        </div>
        <div class="col-sm-6 pt-4">
            @if (session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>

        <div class="col-sm-8 pl-5">
            @foreach ($comments as $comment)
                <div class="col-sm-12 p-3 m-2 rounded border">
                    <div>Avtor: {{ $comment->author }}</div>
                    <div>Kometar: {{ $comment->body }}</div>
                    <div>Objavljen: {{ $comment->created_at }}</div>
                    <a href=""></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection