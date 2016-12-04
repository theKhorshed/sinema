<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\Show;
use App\ShowOnHall;
use App\Hall;

class PagesController extends Controller
{
	/**
	 * Homepage
	 *
	 * @return void
	 * @author Khorshed Alam
	 **/
	public function home()
	{
		return view('home');
	}

	/**
	 * Show Time Page
	 *
	 * @return void
	 * @author Khorshed Alam
	 **/
	public function showTimes()
	{
		$movies = Movie::with('showedOn.show')->get();
		return view('showtime', compact('movies'));
	}

	/**
	 * Buy Ticket Page
	 *
	 * @return void
	 * @author Khorshed Alam
	 **/
	public function ticket()
	{
		return view('ticket');
	}

	/**
	 * Dashboard Page
	 *
	 * @return void
	 * @author 
	 **/
    public function dashboard()
    {
		$movies   = Movie::all();
		$shows    = Show::all();
		$halls    = Hall::all();
		$allShows = ShowOnHall::with('hall', 'show')->get();


    	return view('dashboard', compact('movies', 'shows', 'halls', 'allShows'));
    }
}
