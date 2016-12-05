<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use App\Movie;
use App\ShowOnHall;
use Auth;
use Gate;

class BookingsController extends Controller
{
    /**
     * Only allow authenticated Users.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Gate::allows('manage') ){
            $bookings = Booking::with('user', 'movie', 'hall_show.hall', 'hall_show.show')->get();
        }else{
            $bookings = Auth::user()->bookings;
            $bookings->load('movie', 'hall_show.hall', 'hall_show.show');
        }
        return view('bookings', compact('bookings'));
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
      $user = Auth::user();

      $this->validate($request, [
        'movie' => 'required',
        'seat'  => 'required',
        'show'  => 'required',
        'date'  => 'required',
        'price' => 'required',
      ]);

      $booking    = new Booking;
      $movie      = Movie::findOrFail( $request->input('movie') );
      $showOnHall = ShowOnHall::findOrFail( $request->input('show') );

      $booking->seat  = (int) $request->input('seat');
      $booking->price = (int) $request->input('price');
      $booking->date  = $request->input('date');

      $booking->movie_id     = (int) $movie->id;
      $booking->user_id      = (int) $user->id;
      $booking->hall_show_id = (int) $showOnHall->id;

      $booking->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
