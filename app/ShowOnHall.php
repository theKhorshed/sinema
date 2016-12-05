<?php

namespace App;

use App\Movie;

use App\Hall;

use App\Show;

use Illuminate\Database\Eloquent\Model;

class ShowOnHall extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hall_show';

    public function movie()
    {
    	return $this->belongsTo(Movie::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function bookings()
    {
      return $this->hasMany('App\Booking');
    }

    /**
     * Scope a query to only include available hall and show.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailable($query)
    {
        return $query->whereNull('movie_id');
    }

    /**
     * Scope a query to only include available hall and show.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailableForMovie($query, $movie_id)
    {
        return $query->whereNull('movie_id')->orWhere('movie_id', $movie_id);
    }
}
