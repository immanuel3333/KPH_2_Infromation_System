<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identitas;
use App\Kepalakph;
use App\Rphjp;
use App\Fasilitas;
use App\Fasilitas2;
use App\Fasilitas3;
use App\Fasilitas4;
use App\Lembaga;
use Illuminate\Support\Facades\DB;
use File;
use App\Identitas2;
use App\Kepalakph2;
use App\Lembaga2;
use App\Rphjp2;
use App\Identitas3;
use App\Kepalakph3;
use App\Lembaga3;
use App\Rphjp3;
use App\Identitas4;
use App\Kepalakph4;
use App\Lembaga4;
use App\Rphjp4;

class DataUmumController extends Controller
{
       public function index()
       {
           return view('dataumum.index');
       }
       public function index2()
       {
           return view('dataumum2.index2');
       }
       public function index3()
       {
           return view('dataumum3.index3');
       }
       public function index4()
       {
           return view('dataumum4.index4');
       }
//data umum identitas
       public function identitas()
       {
           $idn = Identitas::latest()->get();
           return view('dataumum.identitas', compact('idn'));
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
           return redirect('show-dataumum')->with('success', 'Identitas berhasil ditambahkan!');

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
           return redirect('show-dataumum')->with('success', 'Identitas berhasil diubah!');

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

        return redirect('show-dataumum')->with('success', 'Kepala KPH berhasil ditambahkan!');
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
        return redirect('show-dataumum')->with('success', 'Kepala KPH berhasil diubah!');

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


        return redirect('show-dataumum')->with('success', 'Lembaga berhasil ditambahkan!');
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
        return redirect('show-dataumum')->with('success', 'Lembaga berhasil diubah!');

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
           return redirect('show-dataumum')->with('success', 'RPHJP berhasil ditambahkan!');

       }

       public function updaterphjp(Request $request, $id)
       {
           $rp=Rphjp::find($id);
           $rp->update([
            'upaya'=> $request->upaya,
            'kendala'=> $request->kendala,
            'progres'=> $request->progres
           ]);
           return redirect('show-dataumum')->with('success', 'RPHJP berhasil diubah!');

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
        return redirect('show-dataumum')->with('success', 'Fasilitas berhasil ditambahkan!');
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
        return redirect('show-dataumum')->with('success', 'Fasilitas berhasil diubah!');

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
        // return dd($fs);

    }

    public function viewfasilitas12($id)
       {
        $fs=Fasilitas::find($id);
        return view('dataumum.editfasilitas',compact('fs'));
       }

       public function delete($id)
       {
           $fs=Fasilitas::find($id);
           $fs->delete();
           return redirect('show-dataumum');
       }
//akhir dataumum fasilitas





//data umum identitas 2
public function identitas2()
{
    $idn = Identitas2::latest()->get();
    return view('dataumum2.identitas2', compact('idn'));
}

public function inputidentitas2()
{
    return view ('dataumum2.inputidentitas2');

}
public function storeidentitas2(Request $request)
{
    // dd($request->all());
    $idn = Identitas2::create([
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
    return redirect('show-dataumum2')->with('success', 'Identitas berhasil ditambahkan!');

}

public function showidentitas2(Request $request)
{
    $idn = DB::table('identitas2')->get();
    return view('dataumum2.home', compact('idn'));
}

public function updateidentitas2(Request $request, $id)
{
    $idn=Identitas2::find($id);
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
    return redirect('show-dataumum2')->with('success', 'Identitas berhasil diubah!');

}

public function viewidentitas2($id)
{
 $idn=Identitas2::find($id);
 return view('dataumum2.editidentitas2',compact('idn'));
}

//akhir identitas 2

//dataumum kepalakph 2
public function kepalakph2()
{
 $kkph = DB::table('kepalakph2')->get();
 return view('dataumum2.kepalakph2',compact('kkph'));
}
public function inputkepalakph2()
 {
  $kkph = Kepalakph2::latest()->get();
  return view('dataumum2.inputkepalakph2');
 }

public function storekepalakph2(Request $request)
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
 $kkph = Kepalakph2::create([
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

 return redirect('show-dataumum2')->with('success', 'Kepala KPH berhasil ditambahkan!');
}

public function updatekepalakph2(Request $request, $id)
{
 $kkph=Kepalakph2::find($id);
 File::delete($kkph->image);
 $file = $request->file('gambar');
 $file->move('public/kepalakph2/',$file->getClientOriginalName());
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
     'gambar' => 'public/kepalakph2/'.$file->getClientOriginalName(),
 ]);
 return redirect('show-dataumum2')->with('success', 'Kepala KPH berhasil diubah!');

}

public function viewkepalakph2($id)
{
 $kkph=Kepalakph2::find($id);
 return view('dataumum2.editkepalakph2',compact('kkph'));
}
//akhir dataumum kepalakph

//dataumum lembaga2
public function lembaga2()
{
 $lm = DB::table('lembaga2')->get();
    return view('dataumum2.lembaga2',compact('lm'));
}
public function inputlembaga2()
 {
  $lm = Lembaga2::latest()->get();
  return view('dataumum2.inputlembaga2',compact('lm'));
 }

public function storelembaga2(Request $request)
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

 $lm = Lembaga2::create([
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


 return redirect('show-dataumum2')->with('success', 'Lembaga berhasil ditambahkan!');
}

public function updatelembaga2(Request $request, $id)
{
 $lm = Lembaga2::find($id);
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
 return redirect('show-dataumum2')->with('success', 'Lembaga berhasil diubah!');

}

public function viewlembaga2($id)
{
 $lm=Lembaga2::find($id);
 return view('dataumum2.editlembaga2',compact('lm'));
}
//akhir dataumum lembaga2

//dataumum dataumum rphjp2
public function rphjp2()
{
    $rp = DB::table('rphjp2')->get();
    return view('dataumum2.rphjp2',compact('rp'));
}
public function inputrphjp2()
{
    return view ('dataumum2.inputrphjp2');

}
public function storerphjp2(Request $request)
{
    // dd($request->all());
    $rp = Rphjp2::create([
        'upaya'=> $request->upaya,
        'kendala'=> $request->kendala,
        'progres'=> $request->progres
    ]);
    return redirect('show-dataumum2')->with('success', 'RPHJP berhasil ditambahkan!');

}

public function updaterphjp2(Request $request, $id)
{
    $rp=Rphjp2::find($id);
    $rp->update([
     'upaya'=> $request->upaya,
     'kendala'=> $request->kendala,
     'progres'=> $request->progres
    ]);
    return redirect('show-dataumum2')->with('success', 'RPHJP berhasil diubah!');

}

public function viewrphjp2($id)
{
 $rp=Rphjp2::find($id);
 return view('dataumum2.editrphjp2',compact('rp'));
}
//akhir dataumum rphjp 2

//awal fasilitas2
public function inputfasilitas2()
    {
        $fs = Fasilitas2::latest()->get();
        return view('dataumum2.inputfasilitas2');
    }

    public function storefasilitas2(Request $request)
    {
        // dd($request->all());
        $fs = Fasilitas2::create([
            'aspek' => $request->aspek,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'status' => $request->status,
            'sumberdana' => $request->sumberdana,

        ]);
        return redirect('show-dataumum2')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function updatefasilitas2(Request $request, $id)
    {
        $fs=Fasilitas2::find($id);
        $fs->update([
            'aspek' => $request->aspek,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'status' => $request->status,
            'sumberdana' => $request->sumberdana,

        ]);
        return redirect('show-dataumum2')->with('success', 'Fasilitas berhasil diubah!');

    }

    public function fasilitas2()
       {
           $fs = DB::table('fasilitas2')->get();
           return view('dataumum2.fasilitas2',compact('fs'));
       }

    public function viewfasilitas2()
    {
        $fs=Fasilitas2::all();
        foreach($fs as $fs2)
        {
            $fs2->action='<a href="viewfasilitas122/'.$fs2->id.'" class="btn btn-warning btn-sm" id="update'.$fs2->id.'">Edit</a>
            <a href="delete2/'.$fs2->id.'" class="btn btn-danger btn-sm" id="'.$fs2->id.'" >Delete</a>';
        }

        return response()->json($fs,200);
        // return dd($jl);

    }

    public function viewfasilitas122($id)
       {
        $fs=Fasilitas2::find($id);
        return view('dataumum2.editfasilitas2',compact('fs'));
       }
       public function delete2($id)
       {
           $fs=Fasilitas2::find($id);
           $fs->delete();
           return redirect('show-dataumum2');
       }
//akhir dataumum fasilitas2



//data umum identitas 3
public function identitas3()
{
    $idn = Identitas3::latest()->get();
    return view('dataumum3.identitas3', compact('idn'));
}

public function inputidentitas3()
{
    return view ('dataumum3.inputidentitas3');

}
public function storeidentitas3(Request $request)
{
    // dd($request->all());
    $idn = Identitas3::create([
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
    return redirect('show-dataumum3')->with('success', 'Identitas berhasil ditambahkan!');

}

public function showidentitas3(Request $request)
{
    $idn = DB::table('identitas3')->get();
    return view('dataumum3.home', compact('idn'));
}

public function updateidentitas3(Request $request, $id)
{
    $idn=Identitas3::find($id);
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
    return redirect('show-dataumum3')->with('success', 'Identitas berhasil diubah!');

}

public function viewidentitas3($id)
{
 $idn=Identitas3::find($id);
 return view('dataumum3.editidentitas3',compact('idn'));
}
//akhir dataumum identitas 3

//dataumum kepalakph 3
public function kepalakph3()
{
 $kkph = DB::table('kepalakph3')->get();
 return view('dataumum3.kepalakph3',compact('kkph'));
}
public function inputkepalakph3()
 {
  $kkph = Kepalakph3::latest()->get();
  return view('dataumum3.inputkepalakph3');
 }

public function storekepalakph3(Request $request)
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
 $kkph = Kepalakph3::create([
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

 return redirect('show-dataumum3')->with('success', 'Kepala KPH berhasil ditambahkan!');
}

public function updatekepalakph3(Request $request, $id)
{
 $kkph=Kepalakph3::find($id);
 File::delete($kkph->image);
 $file = $request->file('gambar');
 $file->move('public/kepalakph3/',$file->getClientOriginalName());
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
     'gambar' => 'public/kepalakph3/'.$file->getClientOriginalName(),
 ]);
 return redirect('show-dataumum3')->with('success', 'Kepala KPH berhasil diubah!');

}

public function viewkepalakph3($id)
{
 $kkph=Kepalakph3::find($id);
 return view('dataumum3.editkepalakph3',compact('kkph'));
}
//akhir dataumum kepalakph 3

//dataumum lembaga 3
public function lembaga3()
{
 $lm = DB::table('lembaga3')->get();
    return view('dataumum3.lembaga3',compact('lm'));
}
public function inputlembaga3()
 {
  $lm = Lembaga3::latest()->get();
  return view('dataumum3.inputlembaga3',compact('lm'));
 }

public function storelembaga3(Request $request)
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

 $lm = Lembaga3::create([
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


 return redirect('show-dataumum3')->with('success', 'Lembaga berhasil ditambahkan!');
}

public function updatelembaga3(Request $request, $id)
{
 $lm = Lembaga3::find($id);
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
 return redirect('show-dataumum3')->with('success', 'Lembaga berhasil diubah!');

}

public function viewlembaga3($id)
{
 $lm=Lembaga3::find($id);
 return view('dataumum3.editlembaga3',compact('lm'));
}
//akhir dataumum lembaga 3

//dataumum dataumum rphjp3
public function rphjp3()
{
    $rp = DB::table('rphjp3')->get();
    return view('dataumum3.rphjp3',compact('rp'));
}
public function inputrphjp3()
{
    return view ('dataumum3.inputrphjp3');

}
public function storerphjp3(Request $request)
{
    // dd($request->all());
    $rp = Rphjp3::create([
        'upaya'=> $request->upaya,
        'kendala'=> $request->kendala,
        'progres'=> $request->progres
    ]);
    return redirect('show-dataumum3')->with('success', 'RPHJP berhasil ditambahkan!');

}

public function updaterphjp3(Request $request, $id)
{
    $rp=Rphjp3::find($id);
    $rp->update([
     'upaya'=> $request->upaya,
     'kendala'=> $request->kendala,
     'progres'=> $request->progres
    ]);
    return redirect('show-dataumum3')->with('success', 'RPHJP berhasil diubah!');

}

public function viewrphjp3($id)
{
 $rp=Rphjp3::find($id);
 return view('dataumum3.editrphjp3',compact('rp'));
}
//akhir dataumum rphjp 3

//awal fasilitas3
public function inputfasilitas3()
    {
        $fs = Fasilitas3::latest()->get();
        return view('dataumum3.inputfasilitas3');
    }

    public function storefasilitas3(Request $request)
    {
        // dd($request->all());
        $fs = Fasilitas3::create([
            'aspek' => $request->aspek,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'status' => $request->status,
            'sumberdana' => $request->sumberdana,

        ]);
        return redirect('show-dataumum3')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function updatefasilitas3(Request $request, $id)
    {
        $fs=Fasilitas3::find($id);
        $fs->update([
            'aspek' => $request->aspek,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'status' => $request->status,
            'sumberdana' => $request->sumberdana,

        ]);
        return redirect('show-dataumum3')->with('success', 'Fasilitas berhasil diubah!');

    }

    public function fasilitas3()
       {
           $fs = DB::table('fasilitas3')->get();
           return view('dataumum3.fasilitas3',compact('fs'));
       }

    public function viewfasilitas3()
    {
        $fs=Fasilitas3::all();
        foreach($fs as $fs2)
        {
            $fs2->action='<a href="viewfasilitas123/'.$fs2->id.'" class="btn btn-warning btn-sm" id="update'.$fs2->id.'">Edit</a>
            <a href="delete3/'.$fs2->id.'" class="btn btn-danger btn-sm" id="'.$fs2->id.'" >Delete</a>';
        }

        return response()->json($fs,200);
        // return dd($jl);

    }

    public function viewfasilitas123($id)
       {
        $fs=Fasilitas3::find($id);
        return view('dataumum3.editfasilitas3',compact('fs'));
       }

       public function delete3($id)
       {
           $fs=Fasilitas3::find($id);
           $fs->delete();
           return redirect('show-dataumum3');
       }
//akhir dataumum fasilitas3


//data umum identitas 4
public function identitas4()
{
    $idn = Identitas4::latest()->get();
    return view('dataumum4.identitas4', compact('idn'));
}

public function inputidentitas4()
{
    return view ('dataumum4.inputidentitas4');

}
public function storeidentitas4(Request $request)
{
    // dd($request->all());
    $idn = Identitas4::create([
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
    return redirect('show-dataumum4')->with('success', 'Identitas berhasil ditambahkan!');

}

public function showidentitas4(Request $request)
{
    $idn = DB::table('identitas4')->get();
    return view('dataumum4.home', compact('idn'));
}

public function updateidentitas4(Request $request, $id)
{
    $idn=Identitas4::find($id);
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
    return redirect('show-dataumum4')->with('success', 'Identitas berhasil diubah!');

}

public function viewidentitas4($id)
{
 $idn=Identitas4::find($id);
 return view('dataumum4.editidentitas4',compact('idn'));
}
//akhir dataumum identitas 4

//dataumum kepalakph 4
public function kepalakph4()
{
 $kkph = DB::table('kepalakph4')->get();
 return view('dataumum4.kepalakph4',compact('kkph'));
}
public function inputkepalakph4()
 {
  $kkph = Kepalakph4::latest()->get();
  return view('dataumum4.inputkepalakph4');
 }

public function storekepalakph4(Request $request)
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
 $kkph = Kepalakph4::create([
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

 return redirect('show-dataumum4')->with('success', 'Kepala KPH berhasil ditambahkan!');
}

public function updatekepalakph4(Request $request, $id)
{
 $kkph=Kepalakph4::find($id);
 File::delete($kkph->image);
 $file = $request->file('gambar');
 $file->move('public/kepalakph4/',$file->getClientOriginalName());
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
     'gambar' => 'public/kepalakph4/'.$file->getClientOriginalName(),
 ]);
 return redirect('show-dataumum3')->with('success', 'Kepala KPH berhasil diubah!');

}

public function viewkepalakph4($id)
{
 $kkph=Kepalakph4::find($id);
 return view('dataumum4.editkepalakph4',compact('kkph'));
}
//akhir dataumum kepalakph 4

//dataumum lembaga 4
public function lembaga4()
{
 $lm = DB::table('lembaga4')->get();
    return view('dataumum4.lembaga4',compact('lm'));
}
public function inputlembaga4()
 {
  $lm = Lembaga4::latest()->get();
  return view('dataumum4.inputlembaga4',compact('lm'));
 }

public function storelembaga4(Request $request)
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

 $lm = Lembaga4::create([
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


 return redirect('show-dataumum4')->with('success', 'Lembaga berhasil ditambahkan!');
}

public function updatelembaga4(Request $request, $id)
{
 $lm = Lembaga4::find($id);
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
 return redirect('show-dataumum4')->with('success', 'Lembaga berhasil diubah!');

}

public function viewlembaga4($id)
{
 $lm=Lembaga4::find($id);
 return view('dataumum4.editlembaga4',compact('lm'));
}
//akhir dataumum lembaga 4

//dataumum dataumum rphjp 4
public function rphjp4()
{
    $rp = DB::table('rphjp4')->get();
    return view('dataumum4.rphjp4',compact('rp'));
}
public function inputrphjp4()
{
    return view ('dataumum4.inputrphjp4');

}
public function storerphjp4(Request $request)
{
    // dd($request->all());
    $rp = Rphjp4::create([
        'upaya'=> $request->upaya,
        'kendala'=> $request->kendala,
        'progres'=> $request->progres
    ]);
    return redirect('show-dataumum4')->with('success', 'RPHJP berhasil ditambahkan!');

}

public function updaterphjp4(Request $request, $id)
{
    $rp=Rphjp4::find($id);
    $rp->update([
     'upaya'=> $request->upaya,
     'kendala'=> $request->kendala,
     'progres'=> $request->progres
    ]);
    return redirect('show-dataumum4')->with('success', 'RPHJP berhasil diubah!');

}

public function viewrphjp4($id)
{
 $rp=Rphjp4::find($id);
 return view('dataumum4.editrphjp4',compact('rp'));
}
//akhir dataumum rphjp 4

//awal fasilitas4
public function inputfasilitas4()
    {
        $fs = Fasilitas4::latest()->get();
        return view('dataumum4.inputfasilitas4');
    }

    public function storefasilitas4(Request $request)
    {
        // dd($request->all());
        $fs = Fasilitas4::create([
            'aspek' => $request->aspek,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'status' => $request->status,
            'sumberdana' => $request->sumberdana,

        ]);
        return redirect('show-dataumum4')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function updatefasilitas4(Request $request, $id)
    {
        $fs=Fasilitas4::find($id);
        $fs->update([
            'aspek' => $request->aspek,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'status' => $request->status,
            'sumberdana' => $request->sumberdana,

        ]);
        return redirect('show-dataumum4')->with('success', 'Fasilitas berhasil diubah!');

    }

    public function fasilitas4()
       {
           $fs = DB::table('fasilitas4')->get();
           return view('dataumum4.fasilitas4',compact('fs'));
       }

    public function viewfasilitas4()
    {
        $fs=Fasilitas4::all();
        foreach($fs as $fs2)
        {
            $fs2->action='<a href="viewfasilitas124/'.$fs2->id.'" class="btn btn-warning btn-sm" id="update'.$fs2->id.'">Edit</a>
            <a href="delete4/'.$fs2->id.'" class="btn btn-danger btn-sm" id="'.$fs2->id.'" >Delete</a>';
        }

        return response()->json($fs,200);
        // return dd($jl);

    }

    public function viewfasilitas124($id)
       {
        $fs=Fasilitas4::find($id);
        return view('dataumum4.editfasilitas4',compact('fs'));
       }

       public function delete4($id)
       {
           $fs=Fasilitas4::find($id);
           $fs->delete();
           return redirect('show-dataumum4');
       }
//akhir dataumum fasilitas4






}
