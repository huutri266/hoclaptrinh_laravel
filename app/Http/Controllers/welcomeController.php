<?php

namespace App\Http\Controllers;

use App\PhienHoidap;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index() {
//        $phiens = PhienHoidap::all()->sortBy('created_at', 'desc');
        $phiens = PhienHoidap::orderBy('created_at', 'desc')->get();

        return view('welcome',['phiens'=>$phiens]);
    }
}
