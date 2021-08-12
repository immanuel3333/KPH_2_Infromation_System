<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SDM1;
use App\SDM2;
use App\SDM3;
use App\SDM4;
use App\Pendidikan1;
use App\Pendidikan2;
use App\Pendidikan3;
use App\Pendidikan4;
use Illuminate\Support\Facades\DB;
use File;

class SDMController extends Controller
{

    public function index1()
       {
           return view('sdm.index1');
       }
       public function index2()
       {
           return view('sdm.index2');
       }
       public function index3()
       {
           return view('sdm.index3');
       }
       public function index4()
       {
           return view('sdm.index4');
       }
    //SDM1

    public function inputsdm1()
    {
        $pe = SDM1::latest()->get();
        return view('sdm.inputsdm1');
    }

    public function storesdm1(Request $request)
    {
        // dd($request->all());
        $pe = SDM1::create([
            'kkph' => $request->kkph,
            'kepala_seksi' => $request->kepala_seksi,
            'tata_usaha' => $request->tata_usaha,
            'kepala_resort' => $request->kepala_resort,
            'staf_pns' => $request->staf_pns,
            'staf_honorer' => $request->staf_honorer,
            'tenaga_kontrak' => $request->tenaga_kontrak,
            'tenaga_brigdalkarhutlapns' => $request->tenaga_brigdalkarhutlapns,
            'tenaga_brigdalkarhutlanonpns' => $request->tenaga_brigdalkarhutlanonpns,
            'pamhut' => $request->pamhut,
            'sdm_pemda' => $request->sdm_pemda,
            'bukti_rimbawa_sebelum_2015' => $request->bukti_rimbawa_sebelum_2015,
            'bakti_rimbawa_2015' => $request->bakti_rimbawa_2015,
            'bakti_rimbawa_2016' => $request->bakti_rimbawa_2016,
            'bakti_rimbawa_2017' => $request->bakti_rimbawa_2017,
            'bakti_rimbawa_2018' => $request->bakti_rimbawa_2018,
            'total_bakti_rimbawan' => $request->total_bakti_rimbawan,
        ]);

        return redirect('show-sdm1');
    }

    public function showsdm1(Request $request)
    {
        $pe = DB::table('sdm1')->get();
        return view('sdm.showsdm1', compact('pe'));
    }

    public function viewsdm1($id)
    {
        $pe=SDM1::find($id);
        return view('sdm.editsdm1',compact('pe'));
    }

    public function updatesdm1(Request $request, $id)
    {
        $pe=SDM1::find($id);
        $pe->update([
            'kkph' => $request->kkph,
            'kepala_seksi' => $request->kepala_seksi,
            'tata_usaha' => $request->tata_usaha,
            'kepala_resort' => $request->kepala_resort,
            'staf_pns' => $request->staf_pns,
            'staf_honorer' => $request->staf_honorer,
            'tenaga_kontrak' => $request->tenaga_kontrak,
            'tenaga_brigdalkarhutlapns' => $request->tenaga_brigdalkarhutlapns,
            'tenaga_brigdalkarhutlanonpns' => $request->tenaga_brigdalkarhutlanonpns,
            'pamhut' => $request->pamhut,
            'sdm_pemda' => $request->sdm_pemda,
            'bukti_rimbawa_sebelum_2015' => $request->bukti_rimbawa_sebelum_2015,
            'bakti_rimbawa_2015' => $request->bakti_rimbawa_2015,
            'bakti_rimbawa_2016' => $request->bakti_rimbawa_2016,
            'bakti_rimbawa_2017' => $request->bakti_rimbawa_2017,
            'bakti_rimbawa_2018' => $request->bakti_rimbawa_2018,
            'total_bakti_rimbawan' => $request->total_bakti_rimbawan,
        ]);
        return redirect('show-sdm1');

    }

    //SDM2

    public function inputsdm2()
    {
        $pe = SDM2::latest()->get();
        return view('sdm.inputsdm2');
    }

    public function storesdm2(Request $request)
    {
        // dd($request->all());
        $pe = SDM2::create([
            'kkph' => $request->kkph,
            'kepala_seksi' => $request->kepala_seksi,
            'tata_usaha' => $request->tata_usaha,
            'kepala_resort' => $request->kepala_resort,
            'staf_pns' => $request->staf_pns,
            'staf_honorer' => $request->staf_honorer,
            'tenaga_kontrak' => $request->tenaga_kontrak,
            'tenaga_brigdalkarhutlapns' => $request->tenaga_brigdalkarhutlapns,
            'tenaga_brigdalkarhutlanonpns' => $request->tenaga_brigdalkarhutlanonpns,
            'pamhut' => $request->pamhut,
            'sdm_pemda' => $request->sdm_pemda,
            'bukti_rimbawa_sebelum_2015' => $request->bukti_rimbawa_sebelum_2015,
            'bakti_rimbawa_2015' => $request->bakti_rimbawa_2015,
            'bakti_rimbawa_2016' => $request->bakti_rimbawa_2016,
            'bakti_rimbawa_2017' => $request->bakti_rimbawa_2017,
            'bakti_rimbawa_2018' => $request->bakti_rimbawa_2018,
            'total_bakti_rimbawan' => $request->total_bakti_rimbawan,
        ]);

        return redirect('show-sdm2');
    }

    public function showsdm2(Request $request)
    {
        $pe = DB::table('sdm2')->get();
        return view('sdm.showsdm2', compact('pe'));
    }

    public function viewsdm2($id)
    {
        $pe=SDM2::find($id);
        return view('sdm.editsdm2',compact('pe'));
    }

    public function updatesdm2(Request $request, $id)
    {
        $pe=SDM2::find($id);
        $pe->update([
            'kkph' => $request->kkph,
            'kepala_seksi' => $request->kepala_seksi,
            'tata_usaha' => $request->tata_usaha,
            'kepala_resort' => $request->kepala_resort,
            'staf_pns' => $request->staf_pns,
            'staf_honorer' => $request->staf_honorer,
            'tenaga_kontrak' => $request->tenaga_kontrak,
            'tenaga_brigdalkarhutlapns' => $request->tenaga_brigdalkarhutlapns,
            'tenaga_brigdalkarhutlanonpns' => $request->tenaga_brigdalkarhutlanonpns,
            'pamhut' => $request->pamhut,
            'sdm_pemda' => $request->sdm_pemda,
            'bukti_rimbawa_sebelum_2015' => $request->bukti_rimbawa_sebelum_2015,
            'bakti_rimbawa_2015' => $request->bakti_rimbawa_2015,
            'bakti_rimbawa_2016' => $request->bakti_rimbawa_2016,
            'bakti_rimbawa_2017' => $request->bakti_rimbawa_2017,
            'bakti_rimbawa_2018' => $request->bakti_rimbawa_2018,
            'total_bakti_rimbawan' => $request->total_bakti_rimbawan,
        ]);
        return redirect('show-sdm2');

    }

    //SDM3

    public function inputsdm3()
    {
        $pe = SDM3::latest()->get();
        return view('sdm.inputsdm3');
    }

    public function storesdm3(Request $request)
    {
        // dd($request->all());
        $pe = SDM3::create([
            'kkph' => $request->kkph,
            'kepala_seksi' => $request->kepala_seksi,
            'tata_usaha' => $request->tata_usaha,
            'kepala_resort' => $request->kepala_resort,
            'staf_pns' => $request->staf_pns,
            'staf_honorer' => $request->staf_honorer,
            'tenaga_kontrak' => $request->tenaga_kontrak,
            'tenaga_brigdalkarhutlapns' => $request->tenaga_brigdalkarhutlapns,
            'tenaga_brigdalkarhutlanonpns' => $request->tenaga_brigdalkarhutlanonpns,
            'pamhut' => $request->pamhut,
            'sdm_pemda' => $request->sdm_pemda,
            'bukti_rimbawa_sebelum_2015' => $request->bukti_rimbawa_sebelum_2015,
            'bakti_rimbawa_2015' => $request->bakti_rimbawa_2015,
            'bakti_rimbawa_2016' => $request->bakti_rimbawa_2016,
            'bakti_rimbawa_2017' => $request->bakti_rimbawa_2017,
            'bakti_rimbawa_2018' => $request->bakti_rimbawa_2018,
            'total_bakti_rimbawan' => $request->total_bakti_rimbawan,
        ]);

        return redirect('show-sdm3');
    }

    public function showsdm3(Request $request)
    {
        $pe = DB::table('sdm3')->get();
        return view('sdm.showsdm3', compact('pe'));
    }

    public function viewsdm3($id)
    {
        $pe=SDM3::find($id);
        return view('sdm.editsdm3',compact('pe'));
    }

    public function updatesdm3(Request $request, $id)
    {
        $pe=SDM3::find($id);
        $pe->update([
            'kkph' => $request->kkph,
            'kepala_seksi' => $request->kepala_seksi,
            'tata_usaha' => $request->tata_usaha,
            'kepala_resort' => $request->kepala_resort,
            'staf_pns' => $request->staf_pns,
            'staf_honorer' => $request->staf_honorer,
            'tenaga_kontrak' => $request->tenaga_kontrak,
            'tenaga_brigdalkarhutlapns' => $request->tenaga_brigdalkarhutlapns,
            'tenaga_brigdalkarhutlanonpns' => $request->tenaga_brigdalkarhutlanonpns,
            'pamhut' => $request->pamhut,
            'sdm_pemda' => $request->sdm_pemda,
            'bukti_rimbawa_sebelum_2015' => $request->bukti_rimbawa_sebelum_2015,
            'bakti_rimbawa_2015' => $request->bakti_rimbawa_2015,
            'bakti_rimbawa_2016' => $request->bakti_rimbawa_2016,
            'bakti_rimbawa_2017' => $request->bakti_rimbawa_2017,
            'bakti_rimbawa_2018' => $request->bakti_rimbawa_2018,
            'total_bakti_rimbawan' => $request->total_bakti_rimbawan,
        ]);
        return redirect('show-sdm3');

    }

    //SDM4

    public function inputsdm4()
    {
        $pe = SDM4::latest()->get();
        return view('sdm.inputsdm4');
    }

    public function storesdm4(Request $request)
    {
        // dd($request->all());
        $pe = SDM4::create([
            'kkph' => $request->kkph,
            'kepala_seksi' => $request->kepala_seksi,
            'tata_usaha' => $request->tata_usaha,
            'kepala_resort' => $request->kepala_resort,
            'staf_pns' => $request->staf_pns,
            'staf_honorer' => $request->staf_honorer,
            'tenaga_kontrak' => $request->tenaga_kontrak,
            'tenaga_brigdalkarhutlapns' => $request->tenaga_brigdalkarhutlapns,
            'tenaga_brigdalkarhutlanonpns' => $request->tenaga_brigdalkarhutlanonpns,
            'pamhut' => $request->pamhut,
            'sdm_pemda' => $request->sdm_pemda,
            'bukti_rimbawa_sebelum_2015' => $request->bukti_rimbawa_sebelum_2015,
            'bakti_rimbawa_2015' => $request->bakti_rimbawa_2015,
            'bakti_rimbawa_2016' => $request->bakti_rimbawa_2016,
            'bakti_rimbawa_2017' => $request->bakti_rimbawa_2017,
            'bakti_rimbawa_2018' => $request->bakti_rimbawa_2018,
            'total_bakti_rimbawan' => $request->total_bakti_rimbawan,
        ]);

        return redirect('show-sdm4');
    }

    public function showsdm4(Request $request)
    {
        $pe = DB::table('sdm4')->get();
        return view('sdm.showsdm4', compact('pe'));
    }

    public function viewsdm4($id)
    {
        $pe=SDM4::find($id);
        return view('sdm.editsdm4',compact('pe'));
    }

    public function updatesdm4(Request $request, $id)
    {
        $pe=SDM4::find($id);
        $pe->update([
            'kkph' => $request->kkph,
            'kepala_seksi' => $request->kepala_seksi,
            'tata_usaha' => $request->tata_usaha,
            'kepala_resort' => $request->kepala_resort,
            'staf_pns' => $request->staf_pns,
            'staf_honorer' => $request->staf_honorer,
            'tenaga_kontrak' => $request->tenaga_kontrak,
            'tenaga_brigdalkarhutlapns' => $request->tenaga_brigdalkarhutlapns,
            'tenaga_brigdalkarhutlanonpns' => $request->tenaga_brigdalkarhutlanonpns,
            'pamhut' => $request->pamhut,
            'sdm_pemda' => $request->sdm_pemda,
            'bukti_rimbawa_sebelum_2015' => $request->bukti_rimbawa_sebelum_2015,
            'bakti_rimbawa_2015' => $request->bakti_rimbawa_2015,
            'bakti_rimbawa_2016' => $request->bakti_rimbawa_2016,
            'bakti_rimbawa_2017' => $request->bakti_rimbawa_2017,
            'bakti_rimbawa_2018' => $request->bakti_rimbawa_2018,
            'total_bakti_rimbawan' => $request->total_bakti_rimbawan,
        ]);
        return redirect('show-sdm4');

    }


    //PENDIDIKAN1

    public function inputpendidikan1()
    {
        $pe = Pendidikan1::latest()->get();
        return view('sdm.inputpendidikan1');
    }

    public function storependidikan1(Request $request)
    {
        // dd($request->all());
        $pe = Pendidikan1::create([
            'dibawah_sma' => $request->dibawah_sma,
            'sma' => $request->sma,
            'd3' => $request->d3,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
            'total' => $request->total,
            'management' => $request->management,
            'teknis' => $request->teknis,
            'lainnya' => $request->lainnya,
        ]);

        return redirect('show-sdm1');
    }

    public function showpendidikan1(Request $request)
    {
        $pe = DB::table('pendidikan1')->get();
        return view('sdm.showpendidikan1', compact('pe'));
    }

    public function viewpendidikan1($id)
    {
        $pe=Pendidikan1::find($id);
        return view('sdm.editpendidikan1',compact('pe'));
    }

    public function updatependidikan1(Request $request, $id)
    {
        $pe=Pendidikan1::find($id);
        $pe->update([
            'dibawah_sma' => $request->dibawah_sma,
            'sma' => $request->sma,
            'd3' => $request->d3,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
            'total' => $request->total,
            'management' => $request->management,
            'teknis' => $request->teknis,
            'lainnya' => $request->lainnya,
        ]);
        return redirect('show-sdm1');

    }

    //PENDIDIKAN2

    public function inputpendidikan2()
    {
        $pe = Pendidikan2::latest()->get();
        return view('sdm.inputpendidikan2');
    }

    public function storependidikan2(Request $request)
    {
        // dd($request->all());
        $pe = Pendidikan2::create([
            'dibawah_sma' => $request->dibawah_sma,
            'sma' => $request->sma,
            'd3' => $request->d3,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
            'total' => $request->total,
            'management' => $request->management,
            'teknis' => $request->teknis,
            'lainnya' => $request->lainnya,
        ]);

        return redirect('showpendidikan2');
    }

    public function showpendidikan2(Request $request)
    {
        $pe = DB::table('pendidikan2')->get();
        return view('sdm.showpendidikan2', compact('pe'));
    }

    public function viewpendidikan2($id)
    {
        $pe=Pendidikan2::find($id);
        return view('sdm.editpendidikan2',compact('pe'));
    }

    public function updatependidikan2(Request $request, $id)
    {
        $pe=Pendidikan2::find($id);
        $pe->update([
            'dibawah_sma' => $request->dibawah_sma,
            'sma' => $request->sma,
            'd3' => $request->d3,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
            'total' => $request->total,
            'management' => $request->management,
            'teknis' => $request->teknis,
            'lainnya' => $request->lainnya,
        ]);
        return redirect('showpendidikan2');

    }


    //PENDIDIKAN3

    public function inputpendidikan3()
    {
        $pe = Pendidikan3::latest()->get();
        return view('sdm.inputpendidikan3');
    }

    public function storependidikan3(Request $request)
    {
        // dd($request->all());
        $pe = Pendidikan3::create([
            'dibawah_sma' => $request->dibawah_sma,
            'sma' => $request->sma,
            'd3' => $request->d3,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
            'total' => $request->total,
            'management' => $request->management,
            'teknis' => $request->teknis,
            'lainnya' => $request->lainnya,
        ]);

        return redirect('showpendidikan3');
    }

    public function showpendidikan3(Request $request)
    {
        $pe = DB::table('pendidikan3')->get();
        return view('sdm.showpendidikan3', compact('pe'));
    }

    public function viewpendidikan3($id)
    {
        $pe=Pendidikan3::find($id);
        return view('sdm.editpendidikan3',compact('pe'));
    }

    public function updatependidikan3(Request $request, $id)
    {
        $pe=Pendidikan3::find($id);
        $pe->update([
            'dibawah_sma' => $request->dibawah_sma,
            'sma' => $request->sma,
            'd3' => $request->d3,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
            'total' => $request->total,
            'management' => $request->management,
            'teknis' => $request->teknis,
            'lainnya' => $request->lainnya,
        ]);
        return redirect('showpendidikan3');

    }

    //PENDIDIKAN4

    public function inputpendidikan4()
    {
        $pe = Pendidikan4::latest()->get();
        return view('sdm.inputpendidikan4');
    }

    public function storependidikan4(Request $request)
    {
        // dd($request->all());
        $pe = Pendidikan4::create([
            'dibawah_sma' => $request->dibawah_sma,
            'sma' => $request->sma,
            'd3' => $request->d3,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
            'total' => $request->total,
            'management' => $request->management,
            'teknis' => $request->teknis,
            'lainnya' => $request->lainnya,
        ]);

        return redirect('showpendidikan4');
    }

    public function showpendidikan4(Request $request)
    {
        $pe = DB::table('pendidikan4')->get();
        return view('sdm.showpendidikan4', compact('pe'));
    }

    public function viewpendidikan4($id)
    {
        $pe=Pendidikan4::find($id);
        return view('sdm.editpendidikan4',compact('pe'));
    }

    public function updatependidikan4(Request $request, $id)
    {
        $pe=Pendidikan4::find($id);
        $pe->update([
            'dibawah_sma' => $request->dibawah_sma,
            'sma' => $request->sma,
            'd3' => $request->d3,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
            'total' => $request->total,
            'management' => $request->management,
            'teknis' => $request->teknis,
            'lainnya' => $request->lainnya,
        ]);
        return redirect('showpendidikan4');

    }
}
