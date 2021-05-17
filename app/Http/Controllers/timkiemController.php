<?php

namespace App\Http\Controllers;

use App\PhienHoidap;
use App\PhienLuachon;
use App\User;
use Illuminate\Http\Request;

class timkiemController extends Controller
{
    private function timkiem($name){
        $users = User::where('name', 'like', "%$name%")->get();
        $i = 0;
        $arr[0] = 1;
        foreach ($users as $user) {
            $arr[$i] = $user->id;
            $i++;
        }
        return $arr;
    }


    public function phienHoidap(Request $request){
        $input = $request->get('input');
        $phiens = PhienHoidap::where('tieude',  'like', "%$input%")->orWhereIn('nguoitao', (
            $this->timkiem($input)
        ))->get();
        return view('home',['phiens'=>$phiens]);
//        return 'hello';
    }

    public function phienLuachon(Request $request){
        $input = $request->get('input');
        $phiens = PhienLuachon::where('tieude',  'like', "%$input%")->orWhereIn('nguoitao', (
        $this->timkiem($input)
        ))->get();
        return view('home2',['phiens'=>$phiens]);
//        return 'hello';
    }


}
