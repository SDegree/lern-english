<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnglishRequest;
use App\Http\Requests\UpdateEnglishRequest;
use App\Models\English;

class EnglishController extends Controller
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
     * @param  \App\Http\Requests\StoreEnglishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnglishRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\English  $english
     * @return \Illuminate\Http\Response
     */
    public function show(English $english)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\English  $english
     * @return \Illuminate\Http\Response
     */
    public function edit(English $english)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnglishRequest  $request
     * @param  \App\Models\English  $english
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnglishRequest $request, English $english)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\English  $english
     * @return \Illuminate\Http\Response
     */
    public function destroy(English $english)
    {
        //
    }
}
