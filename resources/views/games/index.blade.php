@extends('layouts.default')

@section('content')
  <div class="row">
    <div class="col-10">
      <h1>Manage Games</h1>
    </div>
    <div class="col">
      <a class="btn btn-link" href="/game/new">Add Game</a>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <table class="table list-game">
        <thead>
          <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Year</th>
            <th>Developer</th>
            <th>Price</th>
            <th>Cantidad</th>
            <th>Portada</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($games as $game)
            <tr>
              <td>{{ $game->game_type }}</td>
              <td>{{ title_case($game->name) }}</td>
              <td>{{ $game->gender }}</td>
              <td>{{ $game->launch_year }}</td>
              <td>{{ $game->developer }}</td>
              <td>${{ $game->price }}</td>
              <td>{{ $game->qty }}</td>
              <td>
                <img src="{{ asset($game->cover) }}" alt="Game Cover" class="img-thumbnail">
              </td>
              <td>
                <a href="/game/{{ $game->id }}/edit">Editar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
