@extends('layouts.default')

@section('content')
  <h1>Games List</h1>

  <div class="row">
    <div class="col">
      <ul class="list-unstyled list-game">
        @foreach ($games as $game)
          <li class="media">
            <img class="mr-3 img-thumbnail" src="{{ asset($game->cover) }}" alt="Game cover">
            <div class="media-body">
              <h5 class="mt-0 mb-1">{{ title_case($game->name) }} by {{ $game->developer }}</h5>
              <span class="badge badge-primary">{{ $game->launch_year }}</span>
              <span class="badge badge-secondary">{{ $game->gender }}</span>
              <span class="badge badge-warning">{{ $game->game_type }}</span>
              <span class="badge badge-info">${{ $game->price }}</span>
              @if ($game->qty == 0)
                <span class="badge badge-danger">Agotado</span>
              @else
                <span class="badge badge-success">{{ $game->qty }} Disponible(s)</span>
              @endif
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>

@endsection
