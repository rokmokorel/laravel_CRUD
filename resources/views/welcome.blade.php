@extends('layouts.app')
@section('content')
    <div class="pt-5 d-flex justify-content-center">
        <div class="col-5">
            <h1 class="pb-3">Dobrodošel na mojem blogu</h1>
            <a href="{{ route('posts.index') }}">Pregled dodanih prispevkov</a><br>
            <a href="{{ route('posts.create') }}">Dodaj prispevek</a><br>
        </div>
    </div>
@endsection
