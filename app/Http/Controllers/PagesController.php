<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\Show;
use App\ShowOnHall;
use App\Hall;

class PagesController extends Controller
{
    public function dashboard()
    {
		$movies   = Movie::all();
		$shows    = Show::all();
		$halls    = Hall::all();
		$allShows = ShowOnHall::with('movie', 'hall', 'show')->get();

    	return view('dashboard', compact('movies', 'shows', 'halls', 'allShows'));
    }
}
