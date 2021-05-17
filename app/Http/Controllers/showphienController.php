<?php

namespace App\Http\Controllers;

use App\PhienHoidap;
use App\ThamgiaHd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class showphienController extends Controller
{
    //
    public function index($id){
        $phien = PhienHoidap::find($id);
        $thamgia = ThamgiaHd::where('user_id', Auth::user()->id)->where('phien', $id)->first();
        if( !isset($thamgia)) {
            $newThamgia = new ThamgiaHd();
            $newThamgia->user_id = Auth::user()->id;
            $newThamgia->phien = $id;
            $newThamgia->save();
        }

        $phien['ten_nguoitao']  = $phien->getNguoitao->name;
        $hoiHoidaps = $phien->getHoiHoidap;
        foreach ($hoiHoidaps as $hoiHoidap) {
            $hoiHoidap['ten_nguoitao'] = $hoiHoidap->getNguoitao->name;
            $count = $hoiHoidap->getTralois->count();
            $hoiHoidap['so_cautraloi'] = $count;
        }
        return view('trangs/showPhien', ['phien'=>$phien, 'hoiHoidaps'=>$hoiHoidaps]);
    }

    public function indexNotUser($id){
        $phien = PhienHoidap::find($id);
//        $thamgia = ThamgiaHd::where('user_id', Auth::user()->id)->where('phien', $id)->first();
//        if( !isset($thamgia)) {
//            $newThamgia = new ThamgiaHd();
//            $newThamgia->user_id = Auth::user()->id;
//            $newThamgia->phien = $id;
//            $newThamgia->save();
//        }

        $phien['ten_nguoitao']  = $phien->getNguoitao->name;
        $hoiHoidaps = $phien->getHoiHoidap;
        foreach ($hoiHoidaps as $hoiHoidap) {
            $hoiHoidap['ten_nguoitao'] = $hoiHoidap->getNguoitao->name;
            $count = $hoiHoidap->getTralois->count();
            $hoiHoidap['so_cautraloi'] = $count;
        }
        return view('trangs/showPhien', ['phien'=>$phien, 'hoiHoidaps'=>$hoiHoidaps]);
    }

    public function outPhien($id) {
        $thamgia = ThamgiaHd::where('user_id', Auth::user()->id)->where('phien', $id)->first();
        if( isset($thamgia)) {
            $thamgia->delete();
        }
        return redirect()->route('home');
    }

    public function password($id){
        $phien = PhienHoidap::find($id);
        $phien['ten_nguoitao']  = $phien->getNguoitao->name;

        return view('trangs/password', ['phien'=>$phien]);

    }

    public function showphienPass(Request $request, $id){
        $passwordIn = $request->get('matkhau');
//        dd($passwordIn);
        $phien = PhienHoidap::find($id);
        $password = $phien->matkhau;
//        dd($password);
        if ($password == $passwordIn) {

            $phien['ten_nguoitao'] = $phien->getNguoitao->name;
            $hoiHoidaps = $phien->getHoiHoidap;
            foreach ($hoiHoidaps as $hoiHoidap) {
                $hoiHoidap['ten_nguoitao'] = $hoiHoidap->getNguoitao->name;
                $count = $hoiHoidap->getTralois->count();
                $hoiHoidap['so_cautraloi'] = $count;
            }
//            return view('trangs/showPhien', ['phien' => $phien, 'hoiHoidaps' => $hoiHoidaps]);
            return redirect()->route('showphien', $id);
        } else {
//            return view('trangs/password', ['phien'=>$phien]);
            return redirect()->route('passOfPhien', $id)->with('message', 'Mật khẩu không chính xác');
        }
    }


    public function showphienPassNotUser(Request $request, $id){
        $passwordIn = $request->get('matkhau');
//        dd($passwordIn);
        $phien = PhienHoidap::find($id);
        $password = $phien->matkhau;
//        dd($password);
        if ($password == $passwordIn) {

            $phien['ten_nguoitao'] = $phien->getNguoitao->name;
            $hoiHoidaps = $phien->getHoiHoidap;
            foreach ($hoiHoidaps as $hoiHoidap) {
                $hoiHoidap['ten_nguoitao'] = $hoiHoidap->getNguoitao->name;
                $count = $hoiHoidap->getTralois->count();
                $hoiHoidap['so_cautraloi'] = $count;
            }
//            return view('trangs/showPhien', ['phien' => $phien, 'hoiHoidaps' => $hoiHoidaps]);
            return redirect()->route('showphienNotUser', $id);
        } else {
//            return view('trangs/password', ['phien'=>$phien]);
            return redirect()->route('passOfPhien', $id)->with('message', 'Mật khẩu không chính xác');
        }
    }
}


