<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewer extends Model
{ 
    protected $fillable = ['first_name','last_name','age','gender','address'];

    public function movies() {
        return $this->hasMany('App\Movie');
    }

    public function schedules() {
        return $this->hasMany('App\Schedule');
    }
}
