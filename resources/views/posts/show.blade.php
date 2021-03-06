@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-10 offset-sm-1 pt-4">
            <div class="row">
                <h1 class="display-5">{{ $post->title }}</h1>
                @if (Auth::check())
                    <a href="/home" class="ml-4 m-2 pt-2">Nadzorna plošča</a>
                @endif
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
                <a href="{{ route('comments.create') }}?post_id={{ $post->id }}" class="btn btn-primary">Napisi nov
                    komentar</a>
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
                        <div class="row pl-3 pb-3">
                            <div class="pr-5 pt-2">Avtor: {{ $comment->author }}</div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif
                            <form method="post" action="{{ route('posts.store') }}">
                                @csrf
                                <input type="hidden" name="title" value="THREAD: {{ $post->title }}" />
                                <input type="hidden" name="body" value="{{ $post->body }}" />
                                <input type="hidden" name="author" value="{{ $post->author }}" />
                                <button type="submit" class="btn btn-primary">Ustvari nov thread</button>
                            </form>
                            <div class="pl-3">
                                <form method="post" action="{{ route('comments.destroy', ['1']) }}">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="post" value="{{ $post->id }}" />
                                    <input type="hidden" name="id" value="{{ $comment->id }}" />
                                    <button type="delete" class="btn btn-danger">Izbriši</button>
                                </form>
                            </div>
                        </div>
                        <div>Kometar: {{ $comment->body }}</div>
                        <div>Objavljen: {{ $comment->created_at }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
