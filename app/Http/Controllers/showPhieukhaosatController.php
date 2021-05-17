<?php

namespace App\Http\Controllers;

use App\PhienHoidap;
use App\PhienLuachon;
use App\ThamgiaLc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class showPhieukhaosatController extends Controller
{
    public function index($id){
        $thamgia = ThamgiaLc::where('user_id', Auth::user()->id)->where('phien', $id)->first();
        if( !isset($thamgia)) {
            $newThamgia = new ThamgiaLc();
            $newThamgia->user_id = Auth::user()->id;
            $newThamgia->phien = $id;
            $newThamgia->save();
        }
        $phien = PhienLuachon::find($id);



        $cauhois = $phien->getCauhois;

        $cauhoiYNs = $phien->getCauhoiYNs;

        $cauhoiTxts = $phien->getCauhoiTxts;

        return view('khaosat\phieukhaosat', ['phien'=>$phien, 'cauhois'=>$cauhois,  'cauhoiYNs'=>$cauhoiYNs, 'cauhoiTxts'=>$cauhoiTxts]);

    }

    public function outphien($id){
        $thamgia = ThamgiaLc::where('user_id', Auth::user()->id)->where('phien', $id)->first();
        if( isset($thamgia)) {
            $thamgia->delete();
        }
        return redirect()->route('home2');
    }

    public function password($id){
        $phien = PhienLuachon::find($id);
        $phien['ten_nguoitao']  = $phien->getNguoitao->name;

        return view('khaosat/password', ['phien'=>$phien]);
    }

    public function showphienPass(Request $request, $id){
        $passwordIn = $request->get('matkhau');
//        dd($passwordIn);
        $phien = PhienLuachon::find($id);
        $password = $phien->matkhau;
//        dd($password);
        if ($password == $passwordIn) {

            return redirect()->route('showphieukhaosat', $id);
        } else {
            return redirect()->route('passOfPhienKhaosat', $id)->with('message', 'Mật khẩu không chính xác');
        }
    }

    public function thongke($id){
        $phien = PhienLuachon::find($id);

        $cauhois = $phien->getCauhois;

        $cauhoiYNs = $phien->getCauhoiYNs;

        $cauhoiTxts = $phien->getCauhoiTxts;

        return view('khaosat\thongke', ['phien'=>$phien, 'cauhois'=>$cauhois,  'cauhoiYNs'=>$cauhoiYNs, 'cauhoiTxts'=>$cauhoiTxts]);

    }

}
