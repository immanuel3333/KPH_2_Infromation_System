<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identitas;
use App\Kepalakph;
use App\Rphjp;
use App\Fasilitas;
use App\Lembaga;
use Illuminate\Support\Facades\DB;
use File;

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
           return view('dataumum.index');

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

        return redirect('show-dataumum');
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
        return view('dataumum.index');

    }

    public function viewkepalakph($id)
       {
        $kkph=Kepalakph::find($id);
        return view('dataumum.editkepalakph',compact('kkph'));
       }
//akhir dataumum kepalakph


//dataumum dataumum lembaga
       public function lembaga()
       {
        $lm = DB::table('lembaga')->get();
           return view('dataumum.lembaga',compact('lm'));
       }
       public function inputlembaga()
        {
         $lm = Lembaga::latest()->get();
         return view('dataumum.inputlembaga',compact('lm'));
        }

    public function storelembaga(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'unit' => 'required',
            'provinsi' => 'required',
            'jenislembaga' => 'required',
            'kepseksi' => 'required',
            'petugaskph' => 'required',
            'teleponpetugas' => 'required',
            'emailpetugas' => 'required',
            'sklembaga' => 'required',
            'tglsklembaga' => 'required',
            'doksklembaga' => 'required',
            'statblud' => 'required',
            'skblud' => 'required',
            'dokskblud'=> 'required'
        ]);
    //upload image
        $doksklembaga = $request->doksklembaga;
        $dokskblud = $request->dokskblud;
        $new_file = time().$doksklembaga->getClientOriginalName();
        $new_file2 = time().$dokskblud->getClientOriginalName();

        $lm = Lembaga::create([
            'unit' => $request->unit,
            'provinsi' => $request->provinsi,
            'jenislembaga'  => $request->jenislembaga,
            'kepseksi' => $request->kepseksi,
            'petugaskph' => $request->petugaskph,
            'teleponpetugas'  => $request->teleponpetugas,
            'emailpetugas' => $request->emailpetugas,
            'sklembaga' => $request->sklembaga,
            'tglsklembaga' => $request->tglsklembaga,
            'doksklembaga' => $new_file,
            'statblud' => $request->statblud,
            'skblud' => $request->skblud,
            'dokskblud' => $new_file2
        ]);


        return redirect('show-dataumum');
    }

    public function updatelembaga(Request $request, $id)
    {
        $lm = Lembaga::find($id);
            File::delete($lm->doksklembaga);
            File::delete($lm->dokskblud);
            $file = $request->file('doksklembaga');
            $file2 = $request->file('dokskblud');

            $lm->update([
                'unit' => $request->unit,
                'provinsi' => $request->provinsi,
                'jenislembaga'  => $request->jenislembaga,
                'kepseksi' => $request->kepseksi,
                'petugaskph' => $request->petugaskph,
                'teleponpetugas'  => $request->teleponpetugas,
                'emailpetugas' => $request->emailpetugas,
                'sklembaga' => $request->sklembaga,
                'tglsklembaga' => $request->tglsklembaga,
                'doksklembaga' => $file->getClientOriginalName(),
                'statblud' => $request->statblud,
                'skblud' => $request->skblud,
                'dokskblud' => $file2->getClientOriginalName()
        ]);
        return redirect('show-dataumum');

    }

    public function viewlembaga($id)
       {
        $lm=Lembaga::find($id);
        return view('dataumum.editlembaga',compact('lm'));
       }
//akhir dataumum lembaga


//dataumum dataumum rphjp
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
           return redirect('show-dataumum');

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

//awal fasilitas
public function inputfasilitas()
    {
        $fs = Fasilitas::latest()->get();
        return view('dataumum.inputfasilitas');
    }

    public function storefasilitas(Request $request)
    {
        // dd($request->all());
        $fs = Fasilitas::create([
            'aspek' => $request->aspek,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'status' => $request->status,
            'sumberdana' => $request->sumberdana,

        ]);
        return redirect('show-dataumum');
    }

    public function updatefasilitas(Request $request, $id)
    {
        $fs=Fasilitas::find($id);
        $fs->update([
            'aspek' => $request->aspek,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'status' => $request->status,
            'sumberdana' => $request->sumberdana,

        ]);
        return redirect('show-dataumum');

    }

    public function fasilitas()
       {
           $fs = DB::table('fasilitas')->get();
           return view('dataumum.fasilitas',compact('fs'));
       }

    public function viewfasilitas1()
    {
        $fs=Fasilitas::all();
        foreach($fs as $fs2)
        {
            $fs2->action='<a href="viewfasilitas12/'.$fs2->id.'" class="btn btn-warning btn-sm" id="update'.$fs2->id.'">Edit</a>
            <a href="delete/'.$fs2->id.'" class="btn btn-danger btn-sm" id="'.$fs2->id.'" >Delete</a>';
        }

        return response()->json($fs,200);
        // return dd($jl);

    }

    public function viewfasilitas12($id)
       {
        $fs=Fasilitas::find($id);
        return view('dataumum.editfasilitas',compact('fs'));
       }
//akhir dataumum fasilitas
}
