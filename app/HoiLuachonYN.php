<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoiLuachonYN extends Model
{
    protected $table = 'hoi_luachon_yn';

    public function countAll() {
        return $this->hasMany('App\TraloiLuachonYN', 'cauhoi', 'id')->whereNotNull('yesno')->count();
    }

    public function countYes() {
        return $this->hasMany('App\TraloiLuachonYN', 'cauhoi', 'id')->where('yesno', 1)->count();
    }

    public function countNo() {
        return $this->hasMany('App\TraloiLuachonYN', 'cauhoi', 'id')->where('yesno', 0)->count();
    }
}
