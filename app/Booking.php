<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function hall_show()
    {
      return $this->belongsTo('App\ShowOnHall');
    }

    public function movie()
    {
      return $this->belongsTo('App\Movie');
    }
}
