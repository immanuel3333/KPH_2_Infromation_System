<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeriunitkerja2;
use Illuminate\Support\Facades\Auth;
use DB;

class Admin3Controller extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return view('berandaadminunitkerja2');
    }


    //galeriunitkerja
    public function inputgaleriunitkerja2()
    {
        $gl2 = Galeriunitkerja2::latest()->get();
        return view('inputgaleriunitkerja2');
    }

    public function storegaleriunitkerja2(Request $request)
    {
        // dd($request->all());
        $image = $request->gambar;
        $new_image = time().$image->getClientOriginalName();
        $up=substr($request->keterangan, 3,-4);
        $gl2 = Galeriunitkerja2::create([
            'tanggal'=> $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/galeriunit2/'.$new_image
        ]);

        $image->move('public/galeriunit2/', $new_image);

        return redirect('showgaleriunitkerja2');
    }

    public function showgaleriunitkerja2(Request $request)
    {
        $gl2 = DB::table('galeriunitkerja2')->get();
        return view('showgaleriunitkerja2', compact('gl2'));
    }

    public function viewgaleriunitkerja2($id)
    {
        $gl2=Galeriunitkerja2::find($id);
        return view('editgaleriunitkerja2',compact('gl2'));
    }

    public function updategaleriunitkerja2(Request $request, $id)
    {
        $gl2=Galeriunitkerja2::find($id);
        $up=substr($request->keterangan, 3,-4);
        File::delete($gl->gambar);
        $file = $request->file('gambar');
        $file->move('public/galeriunit2/',$file->getClientOriginalName());
        $gl2->update([
            'tanggal' => $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/galeriunit2/'.$file->getClientOriginalName(),
        ]);
        return redirect('showgaleriunitkerja2');

    }


    public function destroygaleriunitkerja2($id)
    {
        // dd($id);
        $hapus = Galeriunitkerja2::findorfail($id);

        $file = public_path('public/galeriunit2/').$hapus->gambar;
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back();
    }





}

