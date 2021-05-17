<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraloiLuachonTxt extends Model
{
    //
    protected $table = 'traloi_luachon_txt';

    public function getNguoitao() {
        return $this->belongsTo('App\User', 'nguoitao', 'id');
    }
}
