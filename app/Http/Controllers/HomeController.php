<?php

namespace App\Http\Controllers;

use App\PhienHoidap;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $phiens = PhienHoidap::orderBy('created_at', 'desc')->get();
        foreach ($phiens as $phien) {
           $phien['ten_nguoitao'] = $phien->getNguoitao->name;
        }

        return view('home',['phiens'=>$phiens]);
    }

    public function phienDaThamgia(){
        $phiens = Auth::user()->getPhienHd;
        return view('home',['phiens'=>$phiens]);
    }

    public function phienSaptoi(){
        $phiens = Auth::user()->getPhienHd;
        return view('home',['phiens'=>$phiens]);
//        return 'hello';
    }

}
