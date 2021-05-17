<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraloiLuachon extends Model
{
    protected $table = 'traloi_luachon';

    public function countChon(){
        return $this->hasMany('App\UserChon', 'cautraloi', 'id')->count();
    }
}
