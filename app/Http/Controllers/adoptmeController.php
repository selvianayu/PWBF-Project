<?php

namespace App\Http\Controllers;

use App\Models\adoptme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adoptmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('adoptme');
        }
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
     * @param  \App\Models\adoptme  $adoptme
     * @return \Illuminate\Http\Response
     */
    public function show(adoptme $adoptme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adoptme  $adoptme
     * @return \Illuminate\Http\Response
     */
    public function edit(adoptme $adoptme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adoptme  $adoptme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adoptme $adoptme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adoptme  $adoptme
     * @return \Illuminate\Http\Response
     */
    public function destroy(adoptme $adoptme)
    {
        //
    }
}
