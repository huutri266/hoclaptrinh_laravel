<?php

namespace App\Http\Controllers;

use App\HoiHoidap;
use Illuminate\Http\Request;

class showTraloiController extends Controller
{
    //
    public function index($id) {
        //xu ly hoi hoi dap
        $hoiHoidap = HoiHoidap::find($id);  // lay ra
        $hoiHoidap['ten_nguoitao'] = $hoiHoidap->getNguoitao->name; // ai tao
        // dem so tra loi
        $count = $hoiHoidap->getTralois->count();
        $hoiHoidap['so_cautraloi'] = $count;

        // tthuoc ve phien nao
        $phien = $hoiHoidap->getPhien;
        $phien['ten_nguoitao'] = $phien->getNguoitao->name;

        // tim cac cau tra loi
        $tralois = $hoiHoidap->getTralois;
        foreach ($tralois as $traloi) {
            $traloi['ten_nguoitao'] = $traloi->getNguoitao->name;
        }
        return view('trangs/traloi', ['phien'=>$phien, 'hoiHoidap'=>$hoiHoidap, 'tralois'=>$tralois]);
    }
}
