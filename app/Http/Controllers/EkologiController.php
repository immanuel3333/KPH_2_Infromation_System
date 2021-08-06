<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekologi;
use App\Ekologi2;
use App\Ekologi3;
use App\Ekologi4;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EkologiController extends Controller
{
   //ekologi

public function inputekologi()
{
    $pe = Ekologi::latest()->get();
    return view('ekologi.inputekologi');
}

public function storeekologi(Request $request)
{
    // dd($request->all());
    $up1=substr($request->jenis_tanah, 3,-4);
    $up2=substr($request->jenis_kayu, 3,-4);
    $up3=substr($request->fauna_satwa, 3,-4);
    $up4=substr($request->kelerengan, 3,-4);
    $up5=substr($request->DAS, 3,-4);
    $pe = Ekologi::create([
        'jenis_tanah' => $up1,
        'jenis_kayu' => $up2,
        'fauna_satwa' => $up3,
        'kelerengan' => $up4,
        'DAS' => $up5,
    ]);

    return redirect('showekologi');
}

public function showekologi(Request $request)
{
    $pe = DB::table('ekologi')->get();
    return view('ekologi.showekologi', compact('pe'));
}

public function viewekologi($id)
{
    $pe=Ekologi::find($id);
    return view('ekologi.editekologi',compact('pe'));
}

public function updateekologi(Request $request, $id)
{
    $pe=Ekologi::find($id);
    $up1=substr($request->jenis_tanah, 3,-4);
    $up2=substr($request->jenis_kayu, 3,-4);
    $up3=substr($request->fauna_satwa, 3,-4);
    $up4=substr($request->kelerengan, 3,-4);
    $up5=substr($request->DAS, 3,-4);
    $pe->update([
        'jenis_tanah' => $up1,
        'jenis_kayu' => $up2,
        'fauna_satwa' => $up3,
        'kelerengan' => $up4,
        'DAS' => $up5,
    ]);
    return redirect('showekologi');

}

//ekologi2

public function inputekologi2()
{
    $pe = Ekologi2::latest()->get();
    return view('ekologi.inputekologi2');
}

public function storeekologi2(Request $request)
{
    // dd($request->all());
    $up1=substr($request->jenis_tanah, 3,-4);
    $up2=substr($request->jenis_kayu, 3,-4);
    $up3=substr($request->fauna_satwa, 3,-4);
    $up4=substr($request->kelerengan, 3,-4);
    $up5=substr($request->DAS, 3,-4);
    $pe = Ekologi2::create([
        'jenis_tanah' => $up1,
        'jenis_kayu' => $up2,
        'fauna_satwa' => $up3,
        'kelerengan' => $up4,
        'DAS' => $up5,
    ]);

    return redirect('showekologi2');
}

public function showekologi2(Request $request)
{
    $pe = DB::table('ekologi2')->get();
    return view('ekologi.showekologi2', compact('pe'));
}

public function viewekologi2($id)
{
    $pe=Ekologi2::find($id);
    return view('ekologi.editekologi2',compact('pe'));
}

public function updateekologi2(Request $request, $id)
{
    $pe=Ekologi2::find($id);
    $up1=substr($request->jenis_tanah, 3,-4);
    $up2=substr($request->jenis_kayu, 3,-4);
    $up3=substr($request->fauna_satwa, 3,-4);
    $up4=substr($request->kelerengan, 3,-4);
    $up5=substr($request->DAS, 3,-4);
    $pe->update([
        'jenis_tanah' => $up1,
        'jenis_kayu' => $up2,
        'fauna_satwa' => $up3,
        'kelerengan' => $up4,
        'DAS' => $up5,
    ]);
    return redirect('showekologi2');

}

//ekologi3
public function inputekologi3()
{
    $pe = Ekologi3::latest()->get();
    return view('ekologi.inputekologi3');
}

public function storeekologi3(Request $request)
{
    // dd($request->all());
    $up1=substr($request->jenis_tanah, 3,-4);
    $up2=substr($request->jenis_kayu, 3,-4);
    $up3=substr($request->fauna_satwa, 3,-4);
    $up4=substr($request->kelerengan, 3,-4);
    $up5=substr($request->DAS, 3,-4);
    $pe = Ekologi3::create([
        'jenis_tanah' => $up1,
        'jenis_kayu' => $up2,
        'fauna_satwa' => $up3,
        'kelerengan' => $up4,
        'DAS' => $up5,
    ]);

    return redirect('showekologi3');
}

public function showekologi3(Request $request)
{
    $pe = DB::table('ekologi3')->get();
    return view('ekologi.showekologi3', compact('pe'));
}

public function viewekologi3($id)
{
    $pe=Ekologi3::find($id);
    return view('ekologi.editekologi3',compact('pe'));
}

public function updateekologi3(Request $request, $id)
{
    $pe=Ekologi3::find($id);
    $up1=substr($request->jenis_tanah, 3,-4);
    $up2=substr($request->jenis_kayu, 3,-4);
    $up3=substr($request->fauna_satwa, 3,-4);
    $up4=substr($request->kelerengan, 3,-4);
    $up5=substr($request->DAS, 3,-4);
    $pe->update([
        'jenis_tanah' => $up1,
        'jenis_kayu' => $up2,
        'fauna_satwa' => $up3,
        'kelerengan' => $up4,
        'DAS' => $up5,
    ]);
    return redirect('showekologi3');

}


//ekologi4

public function inputekologi4()
{
    $pe = Ekologi4::latest()->get();
    return view('ekologi.inputekologi4');
}

public function storeekologi4(Request $request)
{
    // dd($request->all());
    $up1=substr($request->jenis_tanah, 3,-4);
    $up2=substr($request->jenis_kayu, 3,-4);
    $up3=substr($request->fauna_satwa, 3,-4);
    $up4=substr($request->kelerengan, 3,-4);
    $up5=substr($request->DAS, 3,-4);
    $pe = Ekologi4::create([
        'jenis_tanah' => $up1,
        'jenis_kayu' => $up2,
        'fauna_satwa' => $up3,
        'kelerengan' => $up4,
        'DAS' => $up5,
    ]);

    return redirect('showekologi4');
}

public function showekologi4(Request $request)
{
    $pe = DB::table('ekologi4')->get();
    return view('ekologi.showekologi4', compact('pe'));
}

public function viewekologi4($id)
{
    $pe=Ekologi4::find($id);
    return view('ekologi.editekologi4',compact('pe'));
}

public function updateekologi4(Request $request, $id)
{
    $pe=Ekologi4::find($id);
    $up1=substr($request->jenis_tanah, 3,-4);
    $up2=substr($request->jenis_kayu, 3,-4);
    $up3=substr($request->fauna_satwa, 3,-4);
    $up4=substr($request->kelerengan, 3,-4);
    $up5=substr($request->DAS, 3,-4);
    $pe->update([
        'jenis_tanah' => $up1,
        'jenis_kayu' => $up2,
        'fauna_satwa' => $up3,
        'kelerengan' => $up4,
        'DAS' => $up5,
    ]);
    return redirect('showekologi4');

}
}
