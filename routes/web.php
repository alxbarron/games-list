<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $games = App\Models\Game::all();
    return view('index', compact('games'));
});

Route::get('games', 'GameController@index');
Route::get('game/new', 'GameController@create');
Route::post('game/new', 'GameController@store');
Route::get('game/{game}', 'GameController@show');
Route::get('game/{game}/edit', 'GameController@edit');
Route::post('game/{game}/edit', 'GameController@update');
