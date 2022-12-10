<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TableUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('TableUser');
    }

    public function table(){
        return view('TableUser', [
            'users' => User::all()
        ]);
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
     * @param  \App\Models\tableUser  $tableUser
     * @return \Illuminate\Http\Response
     */
    public function show(tableUser $tableUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tableUser  $tableUser
     * @return \Illuminate\Http\Response
     */
    public function edit(tableUser $tableUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tableUser  $tableUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tableUser $tableUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tableUser  $tableUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(tableUser $tableUser)
    {
        //
    }
}
