<?php

namespace App;

use App\Hall;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['title', 'time'];

    public function halls()
    {
    	return $this->belongsToMany(Hall::class)->withTimestamps();;
    }
}
