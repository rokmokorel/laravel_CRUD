@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2 pt-4">
            <h1 class="display-8">Popravi prispevek</h1>
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
                    <input type="text" class="form-control" name="title"  />
                </div>
                <div class="form-group">
                    <label for="body">Vsebina:</label>
                    <input type="text" class="form-control" name="body" />
                </div>
                <div class="form-group">
                    <label for="author">Avtor:</label>
                    <input type="text" class="form-control" name="author" />
                </div>

                <button type="submit" class="btn btn-primary">Popravi</button>
            </form>
        </div>
    </div>
@endsection
