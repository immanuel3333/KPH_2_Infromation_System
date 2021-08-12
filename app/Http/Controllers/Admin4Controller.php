<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeriunitkerja3;
use Illuminate\Support\Facades\Auth;
use DB;
use File;

class Admin4Controller extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return view('berandaadminunitkerja3');
    }


    //galeriunitkerja
    public function inputgaleriunitkerja3()
    {
        $gl3 = Galeriunitkerja3::latest()->get();
        return view('inputgaleriunitkerja3');
    }

    public function storegaleriunitkerja3(Request $request)
    {
        // dd($request->all());
        $image = $request->gambar;
        $new_image = time().$image->getClientOriginalName();
        $up=substr($request->keterangan, 3,-4);
        $gl3 = Galeriunitkerja3::create([
            'tanggal'=> $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/galeriunit3/'.$new_image
        ]);

        $image->move('public/galeriunit3/', $new_image);

        return redirect('showgaleriunitkerja3');
    }

    public function showgaleriunitkerja3(Request $request)
    {
        $gl3 = DB::table('galeriunitkerja3')->get();
        return view('showgaleriunitkerja3', compact('gl3'));
    }

    public function viewgaleriunitkerja3($id)
    {
        $gl3=Galeriunitkerja3::find($id);
        return view('editgaleriunitkerja3',compact('gl3'));
    }

    public function updategaleriunitkerja3(Request $request, $id)
    {
        $gl3=Galeriunitkerja3::find($id);
        $up=substr($request->keterangan, 3,-4);
        File::delete($gl3->gambar);
        $file = $request->file('gambar');
        $file->move('public/galeriunit3/',$file->getClientOriginalName());
        $gl3->update([
            'tanggal' => $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/galeriunit3/'.$file->getClientOriginalName(),
        ]);
        return redirect('showgaleriunitkerja3');

    }


    public function destroygaleriunitkerja3($id)
    {
        // dd($id);
        $hapus = Galeriunitkerja3::findorfail($id);

        $file = public_path('public/galeriunit3/').$hapus->gambar;
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back();
    }
}
