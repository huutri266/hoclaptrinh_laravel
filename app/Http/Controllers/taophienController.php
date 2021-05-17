<?php

namespace App\Http\Controllers;

use App\PhienHoidap;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PhienHdRequest;


class taophienController extends Controller
{
    public function index()
    {
        return view('trangs/taophien');
    }

    public function store(Request $request, PhienHdRequest $rule){
        $phien = new PhienHoidap();
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

//        $phiens = PhienHoidap::all();
//        return view('home',['phiens'=>$phiens]);
        return redirect()->route('home');
    }

}
