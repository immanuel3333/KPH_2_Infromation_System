<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identitas;
use App\Kepalakph;
use App\Rphjp;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\File;

class DataUmumController extends Controller
{
    public function index()
       {
           return view('dataumum.index');
       }
//data umum identitas
       public function home()
       {
           $idn = Identitas::latest()->get();
           return view('dataumum.home', compact('idn'));
       }

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
           return redirect('/show-dataumum');

       }

       public function viewidentitas($id)
       {
        $idn=Identitas::find($id);
        return view('dataumum.editidentitas',compact('idn'));
       }
//akhir dataumum identitas

//dataumum kepalakph
    public function kepalakph()
       {
        $kkph = DB::table('kepalakph')->get();
        return view('dataumum.kepalakph',compact('kkph'));
       }
    public function inputkepalakph()
        {
         $kkph = Kepalakph::latest()->get();
         return view('dataumum.inputkepalakph');
        }

    public function storekepalakph(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'namakph' => 'required',
            'gender' => 'required',
            'nip' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'pangkat' => 'required',
            'ujikompetensi' => 'required',
            'diklat' => 'required',
            'pendidikan' => 'required',
            'tanggalmulai' => 'required',
            'tanggalselesai' => 'required',
            'gambar' => 'required'
        ]);

        $image = $request->gambar;
        $new_image = time().$image->getClientOriginalName();
        $kkph = Kepalakph::create([
            'namakph' => $request->namakph,
            'gender' => $request->gender,
            'nip'  => $request->nip,
            'telepon' => $request->telepon,
            'email' => $request->telepon,
            'pangkat'  => $request->pangkat,
            'ujikompetensi' => $request->ujikompetensi,
            'diklat' => $request->diklat,
            'pendidikan' => $request->pendidikan,
            'tanggalmulai' => $request->tanggalmulai,
            'tanggalselesai' => $request->tanggalselesai,
            'gambar' => 'public/kepalakph/'.$new_image
        ]);
        $image->move('public/kepalakph/', $new_image);

        return view('dataumum.index');
    }

    public function updatekepalakph(Request $request, $id)
    {
        $kkph=Kepalakph::find($id);
        File::delete($kkph->image);
        $file = $request->file('gambar');
        $file->move('public/kepalakph/',$file->getClientOriginalName());
        $kkph->update([
            'namakph' => $request->namakph,
            'nip'  => $request->nip,
            'gender' => $request->gender,
            'telepon' => $request->telepon,
            'pangkat'  => $request->pangkat,
            'ujikompetensi' => $request->ujikompetensi,
            'diklat' => $request->diklat,
            'pendidikan' => $request->pendidikan,
            'tanggalmulai' => $request->tanggalmulai,
            'tanggalselesai' => $request->tanggalselesai,
            'gambar' => 'public/kepalakph/'.$file->getClientOriginalName(),
        ]);
        return redirect('show-dataumum');

    }

    public function viewkepalakph($id)
       {
        $kkph=Kepalakph::find($id);
        return view('dataumum.editkepalakph',compact('kkph'));
       }
//akhir dataumum kepalakph


       public function fasilitas()
       {
           return view('dataumum.fasilitas');
       }
       public function lembaga()
       {
           return view('dataumum.lembaga');
       }
//dataumum rphjp
       public function rphjp()
       {
           $rp = DB::table('rphjp')->get();
           return view('dataumum.rphjp',compact('rp'));
       }
       public function inputrphjp()
       {
           return view ('dataumum.inputrphjp');

       }
       public function storerphjp(Request $request)
       {
           // dd($request->all());
           $rp = Rphjp::create([
               'upaya'=> $request->upaya,
               'kendala'=> $request->kendala,
               'progres'=> $request->progres
           ]);
           return view('dataumum.index');

       }

       public function updaterphjp(Request $request, $id)
       {
           $rp=Rphjp::find($id);
           $rp->update([
            'upaya'=> $request->upaya,
            'kendala'=> $request->kendala,
            'progres'=> $request->progres
           ]);
           return redirect('show-dataumum');

       }

       public function viewrphjp($id)
       {
        $rp=Rphjp::find($id);
        return view('dataumum.editrphjp',compact('rp'));
       }
//akhir dataumum rphjp
}
