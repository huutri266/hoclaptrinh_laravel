<?php

namespace App\Http\Controllers;

use App\PhienLuachon;
use App\TraloiLuachonTxt;
use App\TraloiLuachonYN;
use App\UserChon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class guiPhieutraloiController extends Controller
{
    //
    public function index(Request $request, $id){
        $phien = PhienLuachon::find($id);

        $cauhois = $phien->getCauhois;
        foreach ($cauhois as $cauhoi) {
            if(isset($request["dapancauhoi-".$cauhoi->id])) {
                $userchon = new UserChon();
                $userchon->nguoitao = Auth::user()->id;
                $userchon->cautraloi = intval( $request["dapancauhoi-".$cauhoi->id] ) ;
                $userchon->save();
            }

        }

        $cauhoiYNs = $phien->getCauhoiYNs;
        foreach ($cauhoiYNs as $cauhoi) {

            $traloi = new TraloiLuachonYN();
            $traloi->nguoitao = Auth::user()->id;
//            $yn =  $request["dapancauhoiYN-".$cauhoi->id] ;
            $traloi->cauhoi = $cauhoi->id;
            $traloi->yesno =  $request["dapancauhoiYN-".$cauhoi->id] ;
            $traloi->save();
        }

        $cauhoiTxts = $phien->getCauhoiTxts;
        foreach ($cauhoiTxts as $cauhoi) {
            $traloi = $request["dapancauhoiTxt-".$cauhoi->id];
            if( isset($traloi) ){
                $traloi = new TraloiLuachonTxt();
                $traloi->nguoitao = Auth::user()->id;
                $traloi->cauhoi = $cauhoi->id;
                $traloi->cautraloi =  $request["dapancauhoiTxt-".$cauhoi->id] ;
                $traloi->save();
            }

        }

        return redirect()->route('home2');



    }
}
