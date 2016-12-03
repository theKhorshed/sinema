<?php

namespace App;

use App\Hall;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'description', 'director_name'];

    public function halls()
    {
    	return $this->belongsToMany('App\Hall')->withTimestamps();;
    }
}
