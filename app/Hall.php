<?php

namespace App;

use App\Show;

use App\ShowOnHall;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = ['title', 'seats'];

    public function shows()
    {
    	return $this->belongsToMany(Show::class)->withTimestamps();;
    }

    /**
     * Delete associated halls when a Show is deleted
     *
     * @return void
     * @author Khorshed Alam
     **/
    protected static function boot() {
        parent::boot();

        static::deleting(function($hall) {
			ShowOnHall::where('hall_id', $hall->id)->delete();
        });
    }
}
