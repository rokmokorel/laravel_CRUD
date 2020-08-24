@extends('base')@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Dodaj prispevek</h1>
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
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="Vsebina">Vsebina:</label>
              <input type="text" class="form-control" name="body"/>
          </div>
          <div class="form-group">
              <label for="author">Avtor:</label>
              <input type="text" class="form-control" name="author"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Oddaj prispevek</button>
      </form>
  </div>
</div>
</div>
@endsection
