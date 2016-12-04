<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

use App\Hall;

use App\ShowOnHall;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ShowsOnHalls = ShowOnHall::available()->with('show', 'hall', 'movie')->get();

        $ShowsOnHalls = $ShowsOnHalls->map(function ($item, $key) {
            return [ 
                'id'       => $item->id,
                'title'    => $item->hall->title . ' - ' . $item->show->title,
                'time'     => $item->show->time,
                'movie_id' => $item->movie_id,
                'checked'  => ''
            ];
        });

        return view('movies.create', compact('ShowsOnHalls'));
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
            'title'         => 'required',
            'description'   => 'required',
            'director_name' => 'required',
        ]);

        $movie     = Movie::create( $request->all() );
        $showed_on = $request->input('showed_on');

        foreach ($showed_on as $showed) {

            $movie->showedOn()->save(ShowOnHall::findOrFail($showed));
        }

        return redirect()->route('movies.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $movie->load('showedOn', 'showedOn.hall', 'showedOn.show');

        return view('movies.single', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $movie->load('showedOn');
        $ShowsOnHalls = ShowOnHall::availableForMovie( $movie->id )->with('show', 'hall', 'movie')->get();

        $ShowsOnHalls = $ShowsOnHalls->map(function ($item, $key) {
            return [ 
                'id'       => $item->id,
                'title'    => $item->hall->title . ' - ' . $item->show->title,
                'time'     => $item->show->time,
                'movie_id' => $item->movie_id,
                'checked'  => $item->movie_id ? 'checked' : ''
            ];
        });

        return view('movies.edit', compact('movie', 'ShowsOnHalls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $this->validate($request, [
            'title'         => 'required',
            'description'   => 'required',
            'director_name' => 'required',
        ]);
        
        $movie->update($request->all());

        $showed_on = $request->input('showed_on');

        $ShowsOnHalls = ShowOnHall::availableForMovie($movie->id)->get();

        foreach ( $ShowsOnHalls as $ShowOnHall ) {

            
            if ( in_array($ShowOnHall->id, $showed_on)) {

                $ShowOnHall->movie()->associate($movie);

            }elseif( $ShowOnHall->movie_id == $movie->id ) {

                $ShowOnHall->movie()->dissociate();
            }

            $ShowOnHall->save();

        }
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
