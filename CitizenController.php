<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizens = Citizen::all();
        return view ('citizens.index' , compact('citizens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('citizens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "citizen_name" => 'required',
            "citizen_city" => 'required',
        ]);

        Citizen::create($request->all());
        return redirect("citizens");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function show(Citizen $citizen)
    {
        return view ('citizens.show', compact('citizen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function edit(Citizen $citizen)
    {
        return view ('citizens.edit', compact('citizen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citizen $citizen)
    {
        $request->validate([
            "citizen_name" => 'required',
            "citizen_city" => 'required',
        ]);

        $citizen->update($request->all());
        return redirect ('citizens');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citizen $citizen)
    {
        $citizen->destroy($citizen->id);
        return redirect ("citizens");
    }
}
