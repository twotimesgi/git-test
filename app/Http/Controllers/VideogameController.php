<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevideogameRequest;
use App\Http\Requests\UpdatevideogameRequest;
use App\Models\videogame;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevideogameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevideogameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function show(videogame $videogame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function edit(videogame $videogame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevideogameRequest  $request
     * @param  \App\Models\videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevideogameRequest $request, videogame $videogame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function destroy(videogame $videogame)
    {
        //
    }
}
