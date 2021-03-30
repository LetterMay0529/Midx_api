<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['movie_title', 'viewer_id', 'production_name','rating'];

    public function viewers() {
        return $this->belongsTo('App\Viewer');
    }

    public function schedules() {
        return $this->belongsTo('App\Schedule');
    }
}
