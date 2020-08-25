@extends('base')@section('main')
    <div class="col-sm-12 pt-4">
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div class="col-sm-12">
        <div class="row">
            <h1 class="display-8">Prispevki</h1>
            <a href="{{ route('index') }}" class="btn btn-secondary ml-4 m-2 pt-2">Domov</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Naslov</td>
                    <td>Vsebina</td>
                    <td>Avtor</td>
                    <td>Orodja</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->author }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Prikaži</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Uredi</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Izbriši</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
