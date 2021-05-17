<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhienLuachon extends Model
{
    protected $table = 'phien_luachon';

    public function getNguoitao(){
        return $this->belongsTo('App\User', 'nguoitao', 'id');
    }

    public function getCauhois() {
        return$this->hasMany('App\HoiLuachon', 'phien', 'id');
    }


    public function getCauhoiYNs() {
        return $this->hasMany('App\HoiLuachonYN', 'phien', 'id');
    }

    public function getCauhoiTxts(){
        return $this->hasMany('App\HoiLuachonTxt', 'phien', 'id');
    }
}
