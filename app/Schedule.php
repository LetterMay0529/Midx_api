<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['viewer_id', 'movie_id','screening_date','screening_time','ticket_quantity'];

    public function viewers() {
        return $this->belongsTo('App\Viewer');
    }

    public function movies() {
        return $this->belongsTo('App\Movie');
    }
}
