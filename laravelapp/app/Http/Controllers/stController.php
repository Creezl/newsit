<?php

namespace App\Http\Controllers;

use App\Models\st;
use Illuminate\Http\Request;

class stController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = st::all();
        return view('studTable',compact('posts'));
    
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
     * @param  \App\Models\st  $st
     * @return \Illuminate\Http\Response
     */
    public function show(st $st)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\st  $st
     * @return \Illuminate\Http\Response
     */
    public function edit(st $st)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\st  $st
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, st $st)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\st  $st
     * @return \Illuminate\Http\Response
     */
    public function destroy(st $st)
    {
        //
    }
}
