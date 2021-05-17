<?php

namespace App\Http\Controllers;

use App\TraloiHoidap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TraloiResquest;

class traloiController extends Controller
{
    public function index(Request $request, $id, TraloiResquest $traloiResquest){
        $user_id = Auth::user()->id;
        $traloi = new TraloiHoidap();
        $traloi->cauhoi = $id;
        $traloi->nguoitao =  Auth::user()->id;
        $traloi->cautraloi = $request->input('traloi');
        $traloi->save();

        return redirect()->route('showTraloi', $id);
    }

    public function xoa($id) {
        $traloi = TraloiHoidap::find($id);
        $traloi->delete();
        return redirect()->back();
    }
}
