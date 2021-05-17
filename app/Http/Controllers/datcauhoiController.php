<?php

namespace App\Http\Controllers;

use App\HoiHoidap;
use App\TraloiHoidap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CauhoiRequest;

class datcauhoiController extends Controller
{
    public function index(Request $request, $id, CauhoiRequest $cauhoiRequest){
        $user_id = Auth::user()->id;

        $cauhoi = new HoiHoidap();
        $cauhoi->phien = $id;
        $cauhoi->nguoitao =  Auth::user()->id;
        $cauhoi->cauhoi = $request->input('cauhoi');
        $cauhoi->save();

        return redirect()->route('showphien', $id);
    }
}
