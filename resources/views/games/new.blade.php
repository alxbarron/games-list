@extends('layouts.default')

@section('content')
  <div class="row">
    <div class="col-10">
      <h1>New Game</h1>
    </div>
    <div class="col">
      <a href="/games">Back</a>
    </div>
  </div>

  <div class="row">
    <div class="col">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
      </div>
      @endif
      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 offset-md-3">
      @include('games._form')
    </div>
  </div>
@endsection
