<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    protected $table = 'theloai';

    public function phienHoidap(){
        return $this->hasMany('App\PhienHoidap', 'theloai','id');
    }

    public function hoiHoidap() {
        return $this->hasManyThrough('App\HoiHoidap',
            'App\PhienHoidap','theloai', 'phien', 'id');
    }
}
