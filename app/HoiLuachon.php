<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoiLuachon extends Model
{
    protected $table = 'hoi_luachon';

    public function getTralois() {
        return $this->hasMany('App\TraloiLuachon', 'cauhoi', 'id');
    }

    public function countTralois() {


        return $this->hasManyThrough(
            'App\UserChon',
            'App\TraloiLuachon',
            'cauhoi', // Foreign key on users table...
            'cautraloi', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        )->count();
    }
}
