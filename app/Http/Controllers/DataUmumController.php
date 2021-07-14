<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identitas;
use Illuminate\Support\Facades\DB;

class DataUmumController extends Controller
{
    public function index()
       {
           return view('dataumum.index');
       }

       public function home()
       {
           $idn = Identitas::latest()->get();
           return view('dataumum.home', compact('idn'));
       }
//data umum identitas
       public function inputidentitas()
       {
           return view ('dataumum.inputidentitas');

       }
       public function storeidentitas(Request $request)
       {
           // dd($request->all());
           $idn = Identitas::create([
               'nama'=> $request->nama,
               'unit'=> $request->unit,
               'kategori'=> $request->kategori,
               'tahun'=> $request->tahun,
               'provinsi'=> $request->provinsi,
               'nickname'=> $request->nickname,
               'alias'=> $request->alias,
               'organisasi'=> $request->organisasi,
               'jeniskph'=> $request->jeniskph,
               'alamat'=> $request->alamat,
               'aksesibilitas'=> $request->aksesibilitas,
               'email'=> $request->email,
               'telepon'=> $request->telepon,
               'longitude'=> $request->longitude,
               'latitude'=> $request->latitude
           ]);
           return redirect('dataumum.home', compact('idn'));

       }

       public function showidentitas(Request $request)
       {
           $idn = DB::table('identitas')->get();
           return view('dataumum.home', compact('idn'));
       }

       public function updateidentitas(Request $request, $id)
       {
           $idn=Identitas::find($id);
           $idn->update([
            'nama'=> $request->nama,
            'unit'=> $request->unit,
            'kategori'=> $request->kategori,
            'tahun'=> $request->tahun,
            'provinsi'=> $request->provinsi,
            'nickname'=> $request->nickname,
            'alias'=> $request->alias,
            'organisasi'=> $request->organisasi,
            'jeniskph'=> $request->jeniskph,
            'alamat'=> $request->alamat,
            'aksesibilitas'=> $request->aksesibilitas,
            'email'=> $request->email,
            'telepon'=> $request->telepon,
            'longitude'=> $request->longitude,
            'latitude'=> $request->latitude
           ]);
           return view('dataumum.index');

       }

       public function viewidentitas($id)
       {
        $idn=Identitas::find($id);
        return view('dataumum.editidentitas',compact('idn'));
       }
//akhir dataumum identitas
       public function kepalakph()
       {
           return view('dataumum.kepalakph');
       }
       public function fasilitas()
       {
           return view('dataumum.fasilitas');
       }
       public function lembaga()
       {
           return view('dataumum.lembaga');
       }
       public function rphjp()
       {
           return view('dataumum.rphjp');
       }

}
