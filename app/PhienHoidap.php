<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhienHoidap extends Model
{
    protected $table = 'phien_hoidap';

    public function getTheloai(){
        return$this->belongsTo('App\Theloai','theloai','id');
    }

    public function getHoiHoidap(){
        return $this->hasMany('App\HoiHoidap','phien', 'id');
    }

    public function getNguoitao(){
        return $this->belongsTo('App\User','nguoitao','id');
    }

}
