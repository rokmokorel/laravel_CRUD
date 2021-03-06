@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-8 offset-sm-2 pt-4">
            <div class="row">
                <h1 class="display-8">Dodaj prispevek</h1>
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
                <form method="post" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Naslov:</label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    <div class="form-group">
                        <label for="Vsebina">Vsebina:</label>
                        <textarea type="text" class="form-control" name="body"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Avtor:</label>
                        <input type="text" class="form-control" name="author" />
                    </div>
                    <button type="submit" class="btn btn-primary">Oddaj prispevek</button>
                </form>
            </div>
        </div>
    </div>
@endsection
