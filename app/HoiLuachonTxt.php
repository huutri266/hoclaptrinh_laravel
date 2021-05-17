<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoiLuachonTxt extends Model
{
    //
    protected $table = 'hoi_luachon_txt';

    public function getTralois(){
        return $this->hasMany('App\TraloiLuachonTxt', 'cauhoi', 'id');
    }
}
