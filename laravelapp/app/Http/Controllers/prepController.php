<?php

namespace App\Http\Controllers;

use App\Models\prep;
use Illuminate\Http\Request;

class prepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = prep::all();
        return view('prepTable',compact('posts'));
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
     * @param  \App\Models\prep  $prep
     * @return \Illuminate\Http\Response
     */
    public function show(prep $prep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prep  $prep
     * @return \Illuminate\Http\Response
     */
    public function edit(prep $prep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prep  $prep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prep $prep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prep  $prep
     * @return \Illuminate\Http\Response
     */
    public function destroy(prep $prep)
    {
        //
    }
}
