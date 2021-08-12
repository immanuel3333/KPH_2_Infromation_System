<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Galeriunitkerja;
use App\NKK;
use DB;
use File;

class Admin2Controller extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return view('berandaadminunitkerja');
    }


    //galeriunitkerja
    public function inputgaleriunitkerja()
    {
        $gl = Galeriunitkerja::latest()->get();
        return view('inputgaleriunitkerja');
    }

    public function storegaleriunitkerja(Request $request)
    {
        // dd($request->all());
        $image = $request->gambar;
        $new_image = time().$image->getClientOriginalName();
        $up=substr($request->keterangan, 3,-4);
        $gl = Galeriunitkerja::create([
            'tanggal'=> $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/struktororg/'.$new_image
        ]);

        $image->move('public/struktororg/', $new_image);

        return redirect('showgaleriunitkerja');
    }

    public function showgaleriunitkerja(Request $request)
    {
        $gl = DB::table('galeriunitkerja')->get();
        return view('showgaleriunitkerja', compact('gl'));
    }

    public function viewgaleriunitkerja($id)
    {
        $gl=Galeriunitkerja::find($id);
        return view('editgaleriunitkerja',compact('gl'));
    }

    public function updategaleriunitkerja(Request $request, $id)
    {
        $gl=Galeriunitkerja::find($id);
        $up=substr($request->keterangan, 3,-4);
        File::delete($gl->gambar);
        $file = $request->file('gambar');
        $file->move('public/struktororg/',$file->getClientOriginalName());
        $gl->update([
            'tanggal' => $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/struktororg/'.$file->getClientOriginalName(),
        ]);
        return redirect('showgaleriunitkerja');

    }


    public function destroygaleriunitkerja($id)
    {
        // dd($id);
        $hapus = Galeriunitkerja::findorfail($id);

        $file = public_path('public/struktororg/').$hapus->gambar;
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back();
    }




    //NKK
    public function inputnkk()
    {
        $jl = NKK::latest()->get();
        return view('inputnkk');
    }

    public function storenkk(Request $request)
    {
        // dd($request->all());
        $jl = NKK::create([
            'nama_kelompok' => $request->nama_kelompok,
            'lokasi'  => $request->lokasi,
            'luas' => $request->luas,
            'jumlah_kk' => $request->jumlah_kk,
            'fungsi_kawasan'  => $request->fungsi_kawasan,
            'jenis_kerjasama' => $request->jenis_kerjasama,
            'nomor_nkk' => $request->nomor_nkk,
            'nomor_kulin' => $request->nomor_kulin,
            'jumlah_disadap' => $request->jumlah_disadap,
            'jumlah_dievaluasi' => $request->jumlah_dievaluasi,

        ]);

        return redirect('shownkk');
    }

    public function updatenkk(Request $request, $id)
    {
        $jl=NKK::find($id);
        $jl->update([
            'nama_kelompok' => $request->nama_kelompok,
            'lokasi'  => $request->lokasi,
            'luas' => $request->luas,
            'jumlah_kk' => $request->jumlah_kk,
            'fungsi_kawasan'  => $request->fungsi_kawasan,
            'jenis_kerjasama' => $request->jenis_kerjasama,
            'nomor_nkk' => $request->nomor_nkk,
            'nomor_kulin' => $request->nomor_kulin,
            'jumlah_disadap' => $request->jumlah_disadap,
            'jumlah_dievaluasi' => $request->jumlah_dievaluasi,
        ]);
        return redirect('shownkk');

    }


    public function shownkk(){
        $jl = DB::table('nkk')->get();
        return view('shownkk',compact('jl'));

    }

    public function viewnkk()
    {
        $jl=NKK::all();
        foreach($jl as $jl2)
        {
            $jl2->action='<a href="viewnkk2/'.$jl2->id.'" class="btn btn-warning btn-sm" id="update'.$jl2->id.'">Edit</a>
            <a href="deletenkk/'.$jl2->id.'" class="btn btn-danger btn-sm" id="'.$jl2->id.'" >Delete</a>';
        }

        return response()->json($jl,200);
        // return dd($jl);

    }
    public function viewnkk2($id)
    {
        $jl=NKK::find($id);
        return view('editnkk',compact('jl'));
    }

    public function deletenkk($id)
    {
        $jl=NKK::find($id);
        $jl->delete();
        return redirect('/shownkk');
    }
}
