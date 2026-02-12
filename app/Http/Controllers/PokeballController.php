<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokeball;


class PokeballController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokeballs = Pokeball::all();
        return view('pokeballs.index',compact('pokeballs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pokeball = new Pokeball();
        $pokeball->type = $request->input('type');
        $pokeball->species = $request->input('species');
        $pokeball->height = $request->input('height');
        $pokeball->weight = $request->input('weight');
        $pokeball->hp = $request->input('hp');
        $pokeball->attack = $request->input('attack');
        $pokeball->defense = $request->input('defense');
        $pokeball->image_url = $request->input('image_url');
        $pokeball->Save();

        return redirect('/pokeballs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data['pokeball_update'] = Pokeball::find($id);
        $data['pokeball'] = Pokeball::all();

        return view('pokeballs.update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pokeball = Pokeball::find($id);
        $pokeball->type = $request->input('type');
        $pokeball->species = $request->input('species');
        $pokeball->height = $request->input('height');
        $pokeball->weight = $request->input('weight');
        $pokeball->hp = $request->input('hp');
        $pokeball->attack = $request->input('attack');
        $pokeball->defense = $request->input('defense');
        $pokeball->image_url = $request->input('image_url');
        $pokeball->Save();

        return redirect('/pokeballs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pokeball = Pokeball::find($id);
        $pokeball->delete();
        return redirect('/pokeballs');
    }
}
