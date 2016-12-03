<?php

namespace App;

use App\Show;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = ['title', 'seats'];

    public function shows()
    {
    	return $this->belongsToMany(Show::class)->withTimestamps();;
    }
}
