<?php

namespace App;

use App\Movie;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = ['title', 'seats'];

    public function movies()
    {
    	return $this->belongsToMany(Movie::class)->withTimestamps();;
    }
}
