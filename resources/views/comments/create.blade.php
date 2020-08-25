@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8 offset-sm-2 pt-4">
            <div class="row">
                <h1 class="display-5">Dodaj komentar</h1>
                @if (Auth::check())
                    <a href="/home" class="ml-4 m-2 pt-2">Nadzorna plošča</a>
                @endif
            </div>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('comments.store') }}">
                    @csrf
                    <input type="hidden" name="post_id" value={{ $post_id }} />
                    <div class="form-group">
                        <label for="author">Avtor:</label>
                        <input type="text" class="form-control" name="author" />
                    </div>
                    <div class="form-group">
                        <label for="body">Komentar:</label>
                        <textarea type="text" class="form-control" name="body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Oddaj komentar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
