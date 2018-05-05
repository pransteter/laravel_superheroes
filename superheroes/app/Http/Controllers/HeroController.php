<?php

namespace App\Http\Controllers;

use App\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Hero::with('images')->get();
        return view('hero.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hero = new Hero;

        $hero->nickname           = $request->nickname;
        $hero->real_name          = $request->real_name;
        $hero->origin_description = $request->origin_description;
        $hero->superpowers        = $request->superpowers;
        $hero->catch_phrase       = $request->catch_phrase;

        $hero->save();

        $request->session()->flash('alert-success', 'Hero was created correctly!');

        return redirect()->route('hero.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('hero.view', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $hero->nickname           = $request->nickname;
        $hero->real_name          = $request->real_name;
        $hero->origin_description = $request->origin_description;
        $hero->superpowers        = $request->superpowers;
        $hero->catch_phrase       = $request->catch_phrase;

        $hero->save();

        $request->session()->flash('alert-success', 'Hero was edited correctly!');

        return redirect()->route('hero.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Hero $hero)
    {
        $hero->delete();
        $request->session()->flash('alert-success', 'Hero was deleted correctly.');
        return redirect()->route('hero.index');
    }
}
