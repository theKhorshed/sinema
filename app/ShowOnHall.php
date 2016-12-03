<?php

namespace App;

use App\Movie;

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
}
