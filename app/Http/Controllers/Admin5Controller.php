<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeriunitkerja4;
use Illuminate\Support\Facades\Auth;
use DB;
class Admin5Controller extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return view('berandaadminunitkerja4');
    }


    //galeriunitkerja
    public function inputgaleriunitkerja4()
    {
        $gl4 = Galeriunitkerja4::latest()->get();
        return view('inputgaleriunitkerja4');
    }

    public function storegaleriunitkerja4(Request $request)
    {
        // dd($request->all());
        $image = $request->gambar;
        $new_image = time().$image->getClientOriginalName();
        $up=substr($request->keterangan, 3,-4);
        $gl4 = Galeriunitkerja4::create([
            'tanggal'=> $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/galeriunit4/'.$new_image
        ]);

        $image->move('public/galeriunit4/', $new_image);

        return redirect('showgaleriunitkerja4');
    }

    public function showgaleriunitkerja4(Request $request)
    {
        $gl4 = DB::table('galeriunitkerja4')->get();
        return view('showgaleriunitkerja4', compact('gl4'));
    }

    public function viewgaleriunitkerja4($id)
    {
        $gl4=Galeriunitkerja4::find($id);
        return view('editgaleriunitkerja4',compact('gl4'));
    }

    public function updategaleriunitkerja4(Request $request, $id)
    {
        $gl4=Galeriunitkerja4::find($id);
        $up=substr($request->keterangan, 3,-4);
        File::delete($gl->gambar);
        $file = $request->file('gambar');
        $file->move('public/galeriunit4/',$file->getClientOriginalName());
        $gl4->update([
            'tanggal' => $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/galeriunit4/'.$file->getClientOriginalName(),
        ]);
        return redirect('showgaleriunitkerja4');

    }


    public function destroygaleriunitkerja4($id)
    {
        // dd($id);
        $hapus = Galeriunitkerja4::findorfail($id);

        $file = public_path('public/galeriunit4/').$hapus->gambar;
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back();
    }
}
