@extends('base')
@section('main')
    <div class="col-sm-8 offset-sm-2 pt-4">
        <div class="row">
            <h1 class="display-8">Popravi prispevek</h1>
            <a href="{{ route('index') }}" class="btn btn-secondary ml-4 m-2 pt-2">Domov</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br />
        @endif
        <form method="post" action="{{ route('posts.update', $post->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">Naslov:</label>
                <input type="text" class="form-control" name="title" />
            </div>
            <div class="form-group">
                <label for="body">Vsebina:</label>
                <textarea type="text" class="form-control" name="body" ></textarea>
            </div>
            <div class="form-group">
                <label for="author">Avtor:</label>
                <input type="text" class="form-control" name="author" />
            </div>
            <button type="submit" class="btn btn-primary">Popravi</button>
        </form>
    </div>
@endsection
