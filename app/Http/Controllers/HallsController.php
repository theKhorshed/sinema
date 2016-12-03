<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hall;

use App\Show;


class HallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halls = Hall::all();
        return view('halls.index', compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'seats' => 'required'
        ]);

        $hall  = Hall::create($request->all());
        $shows = Show::pluck('id');

        foreach ($shows as $show) {
            $hall->shows()->attach($show);
        }

        return redirect()->route('halls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hall $hall)
    {
        $hall->load('shows');
        return $hall;
        return view('halls.single', compact('hall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hall $hall)
    {
        return view('halls.edit', compact('hall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hall $hall)
    {
        $this->validate($request, [
            'title' => 'required',
            'seats' => 'required'
        ]);

        $hall->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hall $hall)
    {
        //
    }
}
