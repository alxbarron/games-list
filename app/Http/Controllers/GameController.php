<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Game $game)
    {
        $request->validate([
          'type'      =>  'required',
          'name'      =>  'required|unique:games|min:5|max:255',
          'gender'    =>  'required',
          'year'      =>  'required',
          'developer' =>  'required',
          'price'     =>  'required',
          'qty'       =>  'required',
          'cover'     =>  'required|image|mimes:jpeg,png,jpg|max:2000'
        ]);

        $imageName = str_slug($request->name, '-').'.'.request()->cover->getClientOriginalExtension();
        request()->cover->move(public_path('img/covers'), $imageName);
        $game = $game->create([
          'game_type'   =>  $request->type,
          'name'        =>  $request->name,
          'gender'      =>  $request->gender,
          'launch_year' =>  $request->year,
          'developer'   =>  $request->developer,
          'price'       =>  $request->price,
          'qty'         =>  $request->qty,
          'cover'       =>  'img/covers/'.$imageName
        ]);

        return back()->with('success','You have successfully added a new game.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
