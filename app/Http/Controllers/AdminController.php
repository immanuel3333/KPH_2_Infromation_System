<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\counter;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\VisiMisi;
use App\TugasFungsi;
use App\Sejarah;
use App\Galeriupt;
use File;
use App\SDM1;



class AdminController extends Controller
{
    public function home()
    {
        $comments = Comment::all();
        return view('berandaadminupt',compact('comments'));

    }

    public function approval(Request $request)
    {

    	$comment= Comment::find($request->commentId);
    	$approveVal=$request->approve;
    	if($approveVal=='on'){
    		$approveVal=1;
    	}else{
    		$approveVal=0;
    	}

    	$comment->approve=$approveVal;
    	$comment->save();

    	return back();
    }


    public function delete($id)
     {

        $row = Comment::find($id);
        $row->delete();
        User::find(Auth::id())->update([
            'id'=> null,
        ]);
        return redirect('/home');
     }

     //visimisi

    public function inputvisimisi()
    {
        return view ('/inputvisimisi');

    }
    public function storevisimisi(Request $request)
    {

        $this->validate($request, [
            'visi' => 'required|min:3',
            'misi' => 'required|min:3',
        ]);
        // dd($request->all());
        VisiMisi::create([
            'visi'=> $request->visi,
            'misi'=> $request->misi
        ]);
        return redirect('/showvisimisi')->with('success', 'Visi dan Misi berhasil ditambahkan!');


    }

    public function showvisimisi(Request $request)
    {
        $vm = DB::table('visimisi')->get();
        return view('showvisimisi', compact('vm'));
    }

    public function updatevisimisi(Request $request, $id)
    {
        $this->validate($request, [
            'visi' => 'required|min:3',
            'misi' => 'required|min:3',
        ]);
        $vm=VisiMisi::find($id);
        $vm->update([
            'visi'=>$request->visi,
            'misi'=>$request->misi
        ]);
        return redirect('showvisimisi')->with('success', 'Visi dan Misi berhasil diubah!');

    }

    public function viewvisimisi()
    {
        $vm = DB::table('visimisi')->get();
      return view('editvisimisi', compact('vm'));
    }

    //Tugasfungsi

    public function inputtugasfungsi()
    {
        return view ('/inputtugasfungsi');

    }
    public function storetugasfungsi(Request $request)
    {
        $this->validate($request, [
            'tugas' => 'required|min:3',
            'fungsi' => 'required|min:3',
        ]);
        // dd($request->all());
        $up=substr($request->tugas, 3,-4);
        $down=substr($request->tugas, 3,-4);
        TugasFungsi::create([
            'tugas'=> $up,
            'fungsi'=> $down
        ]);
        return redirect('/showtugasfungsi')->with('success', 'Tugas dan Fungsi berhasil ditambahkan!');

    }

    public function showtugasfungsi(Request $request)
    {
        $tf = DB::table('tugas_fungsi')->get();
        return view('showtugasfungsi', compact('tf'));
    }

    public function updatetugasfungsi(Request $request, $id)
    {
        $this->validate($request, [
            'tugas' => 'required|min:3',
            'fungsi' => 'required|min:3',
        ]);        
        $tf=TugasFungsi::find($id);
        $up=substr($request->tugas, 3,-4);
        $down=substr($request->fungsi, 3,-4);
        $tf->update([
            'tugas'=>$up,
            'fungsi'=>$down
        ]);
        return redirect('showtugasfungsi')->with('success', 'Visi dan Misi berhasil diubah!');

    }
    public function view2()
    {
        $tf = DB::table('tugas_fungsi')->get();
      return view('edittugasfungsi', compact('tf'));
    }



    // sejarah
    public function inputsejarah()
    {
        return view ('/inputsejarah');
    }
    public function store3(Request $request)
    {
        $this->validate($request, [
            'sejarah' => 'required|min:3',
            'gambar' => 'required'
        ]);

        $image = $request->gambar;
        $new_image = time().$image->getClientOriginalName();
        $up=substr($request->sejarah, 3,-4);
        $sj = Sejarah::create([
            'sejarah' => $up,
            'gambar' => 'public/struktororg/'.$new_image
        ]);

        $image->move('public/struktororg/', $new_image);

        return redirect('showsejarah')->with('success', 'Sejarah berhasil ditambahkan!');


    }

    public function showsejarah(Request $request)
    {
        $sj = DB::table('sejarah')->get();
        return view('showsejarah', compact('sj'));
    }

    public function update3(Request $request, $id)
    {
        $this->validate($request, [
            'sejarah' => 'required|min:3',
            'gambar' => 'required'
        ]);

        $sj=Sejarah::find($id);
        $up=substr($request->sejarah, 3,-4);
        File::delete($sj->image);
        $file = $request->file('gambar');
        $file->move('public/struktororg/',$file->getClientOriginalName());
        $sj->update([
            'sejarah' => $up,
            'gambar' => 'public/struktororg/'.$file->getClientOriginalName(),
        ]);
        return redirect('showsejarah')->with('success', 'Sejarah berhasil diubah!');



    }
    public function view3()
    {
        $sj = DB::table('sejarah')->get();
      return view('editsejarah', compact('sj'));
    }


    //galeriupt
    public function inputgaleriupt()
    {
        $gl = Galeriupt::latest()->get();
        return view('inputgaleriupt');
    }

    public function store4(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);
        // dd($request->all());
        $image = $request->gambar;
        $new_image = time().$image->getClientOriginalName();
        $up=substr($request->keterangan, 3,-4);
        $gl = Galeriupt::create([
            'tanggal'=> $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/struktororg/'.$new_image
        ]);

        $image->move('public/struktororg/', $new_image);

        return redirect('showgaleriupt')->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function showgaleriupt(Request $request)
    {
        $gl = DB::table('galeriupt')->get();
        return view('showgaleriupt', compact('gl'));
    }

    public function view4($id)
    {
        $gl=Galeriupt::find($id);
        return view('editgaleriupt',compact('gl'));
    }

    public function update4(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);
        $gl=Galeriupt::find($id);
        $up=substr($request->keterangan, 3,-4);
        File::delete($gl->gambar);
        $file = $request->file('gambar');
        $file->move('public/struktororg/',$file->getClientOriginalName());
        $gl->update([
            'tanggal' => $request->tanggal,
            'keterangan' => $up,
            'gambar' => 'public/struktororg/'.$file->getClientOriginalName(),
        ]);
        return redirect('showgaleriupt')->with('success', 'Galeri berhasil diubah!');;

    }


    public function destroy4($id)
    {
        // dd($id);
        $hapus = Galeriupt::findorfail($id);

        $file = public_path('public/struktororg/').$hapus->gambar;
        if (file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back();
    }

//SDM1

public function inputsdm1()
{
    $pe = SDM1::latest()->get();
    return view('inputsdm1');
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

    return redirect('showsdm1');
}

public function showsdm1(Request $request)
{
    $pe = DB::table('sdm1')->get();
    return view('showsdm1', compact('pe'));
}

public function viewsdm1($id)
{
    $pe=SDM1::find($id);
    return view('editsdm1',compact('pe'));
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
    return redirect('showsdm1');

}

    



}


