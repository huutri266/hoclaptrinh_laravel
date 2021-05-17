<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\Types\Array_;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type',
    ];

    /**type
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getTraloiHoidap(){
        return $this->hasMany('App\TraloiHoidap','nguoitao','id');
    }

    public function getPhienHd() {
        return $this->hasManyThrough(
            'App\PhienHoidap', //dich
            'App\ThamgiaHd', // qua
            'user_id', // Foreign key on thamgia tablde de xac dinh User
            'id', // Foreign key on Phien de xac dinh tham gia table
            'id', // Local key on countries table...
            'phien' // Local key on Tham gia de xac ddinh phienHoidap
        );
    }

    public function getPhienLc() {
        return $this->hasManyThrough(
            'App\PhienLuachon', //dich
            'App\ThamgiaLc', // qua
            'user_id', // Foreign key on thamgia tablde de xac dinh User
            'id', // Foreign key on Phien de xac dinh tham gia table
            'id', // Local key on countries table...
            'phien' // Local key on Tham gia de xac ddinh phienHoidap
        );
    }
    public static function timkiem($name){
        $users = User::where('name', 'like', "%$name%")->get();
        $i = 0;
        foreach ($users as $user) {
            $arr[$i] = $user->id;
            $i++;
        }
        return $arr;
    }
}
