<?php

namespace App\Http\Controllers;

use App\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{

    public function inputvisimisi()
    {
        return view('inputvisimisi');
    }

    public function showvisimisi(Request $req)
    {
        $visi = $req->visi;
        $misi = $req->misi;
        return view('showvisimisi', ['var_visi'=>$visi, 'var_misi'=>$misi]);
    }

}




