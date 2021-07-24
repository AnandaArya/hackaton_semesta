<?php

namespace App\Http\Controllers;

use App\Vaksin;
use Illuminate\Http\Request;

class VaksinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vaksins = Vaksin::paginate(5);
        return view('vaksins/index', compact('pendaftars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vaksins/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function show(Vaksin $vaksin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaksin $vaksin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaksin $vaksin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaksin $vaksin)
    {
        //
    }
}
