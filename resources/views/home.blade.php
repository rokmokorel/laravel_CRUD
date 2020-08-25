@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dobrodošli na mojem blogu') }}</div>

                    <div class="card-body">
                        <a href="{{ route('posts.index') }}">Pregled dodanih prispevkov</a><br>
                        <a href="{{ route('posts.create') }}">Dodaj prispevek</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
