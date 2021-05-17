<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoiHoidap extends Model
{
    protected $table = 'hoi_hoidap';

    public function getNguoitao(){
        return $this->belongsTo('App\User', 'nguoitao', 'id');
    }

    public function getPhien(){
        return $this->belongsTo('App\PhienHoidap','phien','id');
    }



    public function getTralois(){
        return $this->hasMany('App\TraloiHoidap', 'cauhoi', 'id');
    }
}

