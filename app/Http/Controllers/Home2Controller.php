<?php

namespace App\Http\Controllers;

use App\PhienHoidap;
use App\PhienLuachon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home2Controller extends Controller
{
    //
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
        $phiens = PhienLuachon::orderBy('created_at', 'desc')->get();

        return view('home2',['phiens'=>$phiens]);
//        return view('home2');

    }

    public function phienDaThamgia(){
        $phiens = Auth::user()->getPhienLc;
        return view('home2',['phiens'=>$phiens]);
    }
}
