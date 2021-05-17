<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraloiHoidap extends Model
{
    protected $table = 'traloi_hoidap';


    public function getNguoitao(){
        return $this->belongsTo('App\User', 'nguoitao','id');
    }
}
