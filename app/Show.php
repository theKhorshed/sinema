<?php

namespace App;

use App\Hall;

use App\ShowOnHall;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['title', 'time'];

    public function halls()
    {
    	return $this->belongsToMany(Hall::class)->withTimestamps();;
    }

    /**
     * Delete associated halls when a Show is deleted
     *
     * @return void
     * @author Khorshed Alam
     **/
    protected static function boot() {
        parent::boot();

        static::deleting(function($show) {
			ShowOnHall::where('show_id', $show->id)->delete();
        });
    }
}
