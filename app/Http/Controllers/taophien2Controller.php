<?php

namespace App\Http\Controllers;


use App\HoiLuachon;
use App\HoiLuachonTxt;
use App\HoiLuachonYN;
use App\Http\Requests\CauhoiRequest;
use App\Http\Requests\PhienHdRequest;
use App\Http\Requests\CauhoiYNRequest;
use App\Http\Requests\CauhoiTxtRequest;
use App\PhienLuachon;
use App\TraloiLuachon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class taophien2Controller extends Controller
{
    public function index() {
        return view('khaosat/taophien');
    }

    public function store(Request $request, PhienHdRequest $rule ){
        $phien = new PhienLuachon();
        $phien->chude = 1;
        $phien->nguoitao = Auth::user()->id;
        $phien->tieude = $request->input('tieude');
        $phien->gioithieu = $request->input('gioithieu');

        //mat khau
        $co_mk =  $request->input('co_mk');

        if($co_mk == 1) {
            $phien->co_mk = 1;
            $phien->matkhau = $request->input('matkhau');
        }

        // thoi gian
        $gioihan = $request->input('time');

        if ($gioihan == 1 ) {
            $phien->gioihan = 1;
            $phien->batdau = $request->input('batdau');
            $phien->ketthuc = $request->input('ketthuc');
        }
        $phien->save();
//        return view('khaosat/phieukhaosat', ['phien'=>$phien]);
        $id = $phien->id;
        return redirect()->route('showphieukhaosat', $id);

//        $phiens = PhienHoidap::all();
//        return view('home',['phiens'=>$phiens]);
    }

    public function taocauhoi(Request $request, $id, CauhoiRequest $cauhoiRequest) {

        $hoiluachon = new HoiLuachon();
        $hoiluachon->cauhoi = $request->get('cauhoi');
        $hoiluachon->phien = $id;
        $hoiluachon->nguoitao = Auth::user()->id;
        $hoiluachon->save();


        $dapan[0] = $request->get('dapan1');
        $dapan[1] = $request->get('dapan2');
        $dapan[2] = $request->get('dapan3');
        $dapan[3]= $request->get('dapan4');

        for( $i = 0; $i < 4; $i++ ) {
            if( isset($dapan[$i])){
                $traloiLuachon = new TraloiLuachon();
                $traloiLuachon->cauhoi = $hoiluachon->id;
//            $traloiLuachon->cautraloi = $request->get("dapan".$i );
                $traloiLuachon->cautraloi = $dapan[$i];
                $traloiLuachon->nguoitao = Auth::user()->id;
                $traloiLuachon->save();
            }

        }

        return redirect()->route('showphieukhaosat', $id);

    }

    public function taocauhoiYN(Request $request, $id, CauhoiYNRequest $cauhoiYNRequest){
        $hoiluachonYN = new HoiLuachonYN();
        $hoiluachonYN->cauhoi = $request->get('cauhoiYN');
        $hoiluachonYN->phien = $id;
        $hoiluachonYN->nguoitao = Auth::user()->id;
        $hoiluachonYN->save();
        return redirect()->route('showphieukhaosat', $id);
    }

    public function taocauhoiTxt(Request $request, $id, CauhoiTxtRequest $cauhoiTxtRequest){
        $hoiluachonTxt = new HoiLuachonTxt();
        $hoiluachonTxt->cauhoi = $request->get('cauhoiTxt');
        $hoiluachonTxt->phien = $id;
        $hoiluachonTxt->nguoitao = Auth::user()->id;
        $hoiluachonTxt->save();
        return redirect()->route('showphieukhaosat', $id);

    }
}
