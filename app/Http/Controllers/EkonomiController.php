<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PotensiEkonomi1;
use App\PotensiEkonomi2;
use App\PotensiEkonomi3;
use App\PotensiEkonomi4;
use App\JasaLingkungan1;
use App\JasaLingkungan2;
use App\JasaLingkungan3;
use App\JasaLingkungan4;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EkonomiController extends Controller
{
//Jasa Lingkungan1
public function inputjasalingkungan1()
{
    $jl = JasaLingkungan1::latest()->get();
    return view('jasalingkungan.inputjasalingkungan1');
}

public function store6(Request $request)
{
    // dd($request->all());
    $jl = JasaLingkungan1::create([
        'provinsi' => $request->provinsi,
        'jenis_jasa_lingkungan'  => $request->jenis_jasa_lingkungan,
        'satuan' => $request->satuan,
        'keunggulan' => $request->keunggulan,
        'lintang'  => $request->lintang,
        'bujur' => $request->bujur,
        'pengembangan' => $request->pengembangan,
        'tahapan' => $request->tahapan,
        'periode' => $request->periode,
        'hasil' => $request->hasil,

    ]);

    return redirect('showjasalingkungan1')->with('success', 'Jasa Lingkungan berhasil ditambahkan!');;
}

public function update6(Request $request, $id)
{
    $jl=JasaLingkungan1::find($id);
    $jl->update([
        'provinsi' => $request->provinsi,
        'jenis_jasa_lingkungan' => $request->jenis_jasa_lingkungan,
        'satuan' => $request->satuan,
        'keunggulan' => $request->keunggulan,
        'lintang'  => $request->lintang,
        'bujur' => $request->bujur,
        'pengembangan' => $request->pengembangan,
        'tahapan' => $request->tahapan,
        'periode' => $request->periode,
        'hasil' => $request->hasil,
    ]);
    return redirect('showjasalingkungan1')->with('success', 'Jasa Lingkungan berhasil diubah!');

}


public function showjasalingkungan1(){
    $jl = DB::table('jasalingkungan1')->get();
    return view('jasalingkungan.showjasalingkungan1',compact('jl'));

}

public function view6()
{
    $jl=JasaLingkungan1::all();
    foreach($jl as $jl2)
    {
        $jl2->action='<a href="view65/'.$jl2->id.'" class="btn btn-warning btn-sm" id="update'.$jl2->id.'">Edit</a>
        <a href="delete2/'.$jl2->id.'" class="btn btn-danger btn-sm" id="'.$jl2->id.'" >Delete</a>';
    }

    return response()->json($jl,200);
    // return dd($jl);

}
public function view65($id)
{
    $jl=JasaLingkungan1::find($id);
    return view('jasalingkungan.editjasalingkungan1',compact('jl'));
}

public function delete2($id)
{
    $jl=JasaLingkungan1::find($id);
    $jl->delete();
    return redirect('/showjasalingkungan1');
}



//JasaLingkungan2

public function inputjasalingkungan2()
{
    $jl = JasaLingkungan2::latest()->get();
    return view('jasalingkungan.inputjasalingkungan2');
}

public function store62(Request $request)
{
    // dd($request->all());
    $jl = JasaLingkungan2::create([
        'provinsi' => $request->provinsi,
        'jenis_jasa_lingkungan'  => $request->jenis_jasa_lingkungan,
        'satuan' => $request->satuan,
        'keunggulan' => $request->keunggulan,
        'lintang'  => $request->lintang,
        'bujur' => $request->bujur,
        'pengembangan' => $request->pengembangan,
        'tahapan' => $request->tahapan,
        'periode' => $request->periode,
        'hasil' => $request->hasil,

    ]);

    return redirect('showjasalingkungan2');
}

public function update62(Request $request, $id)
{
    $jl=JasaLingkungan2::find($id);
    $jl->update([
        'provinsi' => $request->provinsi,
        'jenis_jasa_lingkungan' => $request->jenis_jasa_lingkungan,
        'satuan' => $request->satuan,
        'keunggulan' => $request->keunggulan,
        'lintang'  => $request->lintang,
        'bujur' => $request->bujur,
        'pengembangan' => $request->pengembangan,
        'tahapan' => $request->tahapan,
        'periode' => $request->periode,
        'hasil' => $request->hasil,
    ]);
    return redirect('showjasalingkungan2');

}


public function showjasalingkungan2(){
    $jl = DB::table('jasalingkungan2')->get();
    return view('jasalingkungan.showjasalingkungan2',compact('jl'));

}

public function view62()
{
    $jl=JasaLingkungan2::all();
    foreach($jl as $jl2)
    {
        $jl2->action='<a href="view652/'.$jl2->id.'" class="btn btn-warning btn-sm" id="update'.$jl2->id.'">Edit</a>
        <a href="delete22/'.$jl2->id.'" class="btn btn-danger btn-sm" id="'.$jl2->id.'" >Delete</a>';
    }

    return response()->json($jl,200);
    // return dd($jl);

}
public function view652($id)
{
    $jl=JasaLingkungan2::find($id);
    return view('jasalingkungan.editjasalingkungan2',compact('jl'));
}

public function delete22($id)
{
    $jl=JasaLingkungan2::find($id);
    $jl->delete();
    return redirect('/showjasalingkungan2');
}



//JasaLingkungan3

public function inputjasalingkungan3()
{
    $jl = JasaLingkungan3::latest()->get();
    return view('jasalingkungan.inputjasalingkungan3');
}

public function store63(Request $request)
{
    // dd($request->all());
    $jl = JasaLingkungan3::create([
        'provinsi' => $request->provinsi,
        'jenis_jasa_lingkungan'  => $request->jenis_jasa_lingkungan,
        'satuan' => $request->satuan,
        'keunggulan' => $request->keunggulan,
        'lintang'  => $request->lintang,
        'bujur' => $request->bujur,
        'pengembangan' => $request->pengembangan,
        'tahapan' => $request->tahapan,
        'periode' => $request->periode,
        'hasil' => $request->hasil,

    ]);

    return redirect('showjasalingkungan3');
}

public function update63(Request $request, $id)
{
    $jl=JasaLingkungan3::find($id);
    $jl->update([
        'provinsi' => $request->provinsi,
        'jenis_jasa_lingkungan' => $request->jenis_jasa_lingkungan,
        'satuan' => $request->satuan,
        'keunggulan' => $request->keunggulan,
        'lintang'  => $request->lintang,
        'bujur' => $request->bujur,
        'pengembangan' => $request->pengembangan,
        'tahapan' => $request->tahapan,
        'periode' => $request->periode,
        'hasil' => $request->hasil,
    ]);
    return redirect('showjasalingkungan3');

}


public function showjasalingkungan3(){
    $jl = DB::table('jasalingkungan3')->get();
    return view('jasalingkungan.showjasalingkungan3',compact('jl'));

}

public function view63()
{
    $jl=JasaLingkungan3::all();
    foreach($jl as $jl2)
    {
        $jl2->action='<a href="view653/'.$jl2->id.'" class="btn btn-warning btn-sm" id="update'.$jl2->id.'">Edit</a>
        <a href="delete23/'.$jl2->id.'" class="btn btn-danger btn-sm" id="'.$jl2->id.'" >Delete</a>';
    }

    return response()->json($jl,200);
    // return dd($jl);

}
public function view653($id)
{
    $jl=JasaLingkungan3::find($id);
    return view('jasalingkungan.editjasalingkungan3',compact('jl'));
}

public function delete23($id)
{
    $jl=JasaLingkungan3::find($id);
    $jl->delete();
    return redirect('showjasalingkungan3');
}


//JasaLingkungan4

public function inputjasalingkungan4()
{
    $jl = JasaLingkungan4::latest()->get();
    return view('jasalingkungan.inputjasalingkungan4');
}

public function store64(Request $request)
{
    // dd($request->all());
    $jl = JasaLingkungan4::create([
        'provinsi' => $request->provinsi,
        'jenis_jasa_lingkungan'  => $request->jenis_jasa_lingkungan,
        'satuan' => $request->satuan,
        'keunggulan' => $request->keunggulan,
        'lintang'  => $request->lintang,
        'bujur' => $request->bujur,
        'pengembangan' => $request->pengembangan,
        'tahapan' => $request->tahapan,
        'periode' => $request->periode,
        'hasil' => $request->hasil,

    ]);

    return redirect('showjasalingkungan4');
}

public function update64(Request $request, $id)
{
    $jl=JasaLingkungan4::find($id);
    $jl->update([
        'provinsi' => $request->provinsi,
        'jenis_jasa_lingkungan' => $request->jenis_jasa_lingkungan,
        'satuan' => $request->satuan,
        'keunggulan' => $request->keunggulan,
        'lintang'  => $request->lintang,
        'bujur' => $request->bujur,
        'pengembangan' => $request->pengembangan,
        'tahapan' => $request->tahapan,
        'periode' => $request->periode,
        'hasil' => $request->hasil,
    ]);
    return redirect('showjasalingkungan4');

}


public function showjasalingkungan4(){
    $jl = DB::table('jasalingkungan4')->get();
    return view('jasalingkungan.showjasalingkungan4',compact('jl'));

}

public function view64()
{
    $jl=JasaLingkungan4::all();
    foreach($jl as $jl2)
    {
        $jl2->action='<a href="view654/'.$jl2->id.'" class="btn btn-warning btn-sm" id="update'.$jl2->id.'">Edit</a>
        <a href="delete24/'.$jl2->id.'" class="btn btn-danger btn-sm" id="'.$jl2->id.'" >Delete</a>';
    }

    return response()->json($jl,200);
    // return dd($jl);

}
public function view654($id)
{
    $jl=JasaLingkungan4::find($id);
    return view('jasalingkungan.editjasalingkungan4',compact('jl'));
}

public function delete24($id)
{
    $jl=JasaLingkungan4::find($id);
    $jl->delete();
    return redirect('/showjasalingkungan4');
}

    //Potensi Ekonomi

    public function inputpotensiekonomi1()
    {
        $pe = PotensiEkonomi1::latest()->get();
        return view('potensiekonomi.inputpotensiekonomi1');
    }

    public function store5(Request $request)
    {
        // dd($request->all());
        $up1=substr($request->kayu, 3,-4);
        $up2=substr($request->nonkayu, 3,-4);
        // $up3=substr($request->jasalingkungan,);
        // $up4=substr($request->bisnis, );
        $up5=substr($request->donor, 3,-4);
        $pe = PotensiEkonomi1::create([
            'kayu' => $up1,
            'nonkayu' => $up2,
            'jasalingkungan' => $request->jasalingkungan,
            'bisnis' => $request->bisnis,
            'donor' => $up5,
        ]);

        return redirect('showpotensiekonomi1');
    }

    public function showpotensiekonomi1(Request $request)
    {
        $pe = DB::table('potensiekonomi1')->get();
        return view('potensiekonomi.showpotensiekonomi1', compact('pe'));
    }

    public function view5($id)
    {
        $pe=PotensiEkonomi1::find($id);
        return view('potensiekonomi.editpotensiekonomi1',compact('pe'));
    }

    public function update5(Request $request, $id)
    {
        $pe=PotensiEkonomi1::find($id);
        $up1=substr($request->kayu, 3,-4);
        $up2=substr($request->nonkayu, 3,-4);
        $up5=substr($request->donor, 3,-4);
        $pe->update([
            'kayu' => $up1,
            'nonkayu' => $up2,
            'jasalingkungan' => $request->jasalingkungan,
            'bisnis' => $request->bisnis,
            'donor' => $up5,
        ]);
        return redirect('showpotensiekonomi1');

    }
    public function ajaxekonomi1(){
        $pe = DB::table('potensiekonomi1')->get();
        return view('ajaxekonomi1',compact('pe'));

    }


    //gabungan potensiekonomi dan jasalingkungan
    public function showkeloladataekonomi1()
       {
           return view('potensiekonomi.indexdataekonomi1');
       }

    

       //Potensi Ekonomi 2

    public function inputpotensiekonomi2()
    {
        $pe = PotensiEkonomi2::latest()->get();
        return view('potensiekonomi.inputpotensiekonomi2');
    }

    public function storepotensiekonomi2(Request $request)
    {
        // dd($request->all());
        $up1=substr($request->kayu, 3,-4);
        $up2=substr($request->nonkayu, 3,-4);
        // $up3=substr($request->jasalingkungan,);
        // $up4=substr($request->bisnis, );
        $up5=substr($request->donor, 3,-4);
        $pe = PotensiEkonomi2::create([
            'kayu' => $up1,
            'nonkayu' => $up2,
            'jasalingkungan' => $request->jasalingkungan,
            'bisnis' => $request->bisnis,
            'donor' => $up5,
        ]);

        return redirect('showpotensiekonomi2');
    }

    public function showpotensiekonomi2(Request $request)
    {
        $pe = DB::table('potensiekonomi2')->get();
        return view('potensiekonomi.showpotensiekonomi2', compact('pe'));
    }

    public function viewpotensiekonomi2($id)
    {
        $pe=PotensiEkonomi2::find($id);
        return view('editpotensiekonomi2',compact('pe'));
    }

    public function updatepotensiekonomi2(Request $request, $id)
    {
        $pe=PotensiEkonomi2::find($id);
        $up1=substr($request->kayu, 3,-4);
        $up2=substr($request->nonkayu, 3,-4);
        $up5=substr($request->donor, 3,-4);
        $pe->update([
            'kayu' => $up1,
            'nonkayu' => $up2,
            'jasalingkungan' => $request->jasalingkungan,
            'bisnis' => $request->bisnis,
            'donor' => $up5,
        ]);
        return redirect('showpotensiekonomi2');

    }
    public function ajaxekonomi2(){
        $pe = DB::table('potensiekonomi2')->get();
        return view('ajaxekonomi2',compact('pe'));

    }

    public function showkeloladataekonomi2()
    {
        return view('potensiekonomi.indexdataekonomi2');
    }

//Potensi Ekonomi 3

public function inputpotensiekonomi3()
{
    $pe = PotensiEkonomi3::latest()->get();
    return view('potensiekonomi.inputpotensiekonomi3');
}

public function storepotensiekonomi3(Request $request)
{
    // dd($request->all());
    $up1=substr($request->kayu, 3,-4);
    $up2=substr($request->nonkayu, 3,-4);
    // $up3=substr($request->jasalingkungan,);
    // $up4=substr($request->bisnis, );
    $up5=substr($request->donor, 3,-4);
    $pe = PotensiEkonomi3::create([
        'kayu' => $up1,
        'nonkayu' => $up2,
        'jasalingkungan' => $request->jasalingkungan,
        'bisnis' => $request->bisnis,
        'donor' => $up5,
    ]);

    return redirect('showpotensiekonomi3');
}

public function showpotensiekonomi3(Request $request)
{
    $pe = DB::table('potensiekonomi3')->get();
    return view('potensiekonomi.showpotensiekonomi3', compact('pe'));
}

public function viewpotensiekonomi3($id)
{
    $pe=PotensiEkonomi3::find($id);
    return view('editpotensiekonomi3',compact('pe'));
}

public function updatepotensiekonomi3(Request $request, $id)
{
    $pe=PotensiEkonomi3::find($id);
    $up1=substr($request->kayu, 3,-4);
    $up2=substr($request->nonkayu, 3,-4);
    $up5=substr($request->donor, 3,-4);
    $pe->update([
        'kayu' => $up1,
        'nonkayu' => $up2,
        'jasalingkungan' => $request->jasalingkungan,
        'bisnis' => $request->bisnis,
        'donor' => $up5,
    ]);
    return redirect('showpotensiekonomi3');

}
public function ajaxekonomi3(){
    $pe = DB::table('potensiekonomi3')->get();
    return view('ajaxekonomi3',compact('pe'));

}

public function showkeloladataekonomi3()
{
    return view('potensiekonomi.indexdataekonomi3');
}


//Potensi Ekonomi 4

public function inputpotensiekonomi4()
{
    $pe = PotensiEkonomi4::latest()->get();
    return view('potensiekonomi.inputpotensiekonomi4');
}

public function storepotensiekonomi4(Request $request)
{
    // dd($request->all());
    $up1=substr($request->kayu, 3,-4);
    $up2=substr($request->nonkayu, 3,-4);
    // $up3=substr($request->jasalingkungan,);
    // $up4=substr($request->bisnis, );
    $up5=substr($request->donor, 3,-4);
    $pe = PotensiEkonomi4::create([
        'kayu' => $up1,
        'nonkayu' => $up2,
        'jasalingkungan' => $request->jasalingkungan,
        'bisnis' => $request->bisnis,
        'donor' => $up5,
    ]);

    return redirect('showpotensiekonomi4');
}

public function showpotensiekonomi4(Request $request)
{
    $pe = DB::table('potensiekonomi4')->get();
    return view('potensiekonomi.showpotensiekonomi4', compact('pe'));
}

public function viewpotensiekonomi4($id)
{
    $pe=PotensiEkonomi4::find($id);
    return view('editpotensiekonomi4',compact('pe'));
}

public function updatepotensiekonomi4(Request $request, $id)
{
    $pe=PotensiEkonomi4::find($id);
    $up1=substr($request->kayu, 3,-4);
    $up2=substr($request->nonkayu, 3,-4);
    $up5=substr($request->donor, 3,-4);
    $pe->update([
        'kayu' => $up1,
        'nonkayu' => $up2,
        'jasalingkungan' => $request->jasalingkungan,
        'bisnis' => $request->bisnis,
        'donor' => $up5,
    ]);
    return redirect('showpotensiekonomi4');
}

public function ajaxekonomi4(){
    $pe = DB::table('potensiekonomi4')->get();
    return view('ajaxekonomi4',compact('pe'));

}

public function showkeloladataekonomi4()
{
    return view('potensiekonomi.indexdataekonomi4');
}

}
