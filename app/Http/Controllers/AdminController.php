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
use App\PotensiEkonomi1;
use App\JasaLingkungan1;
use App\SDM1;




class AdminController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $post = Post::with(['comments', 'comments.child'])->first();
        return view('berandaadminupt',['user'=> $user],compact('post'));


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

    public function inputvisimisi()
    {
        return view ('/inputvisimisi');

    }
    public function store(Request $request)
    {
        // dd($request->all());
        VisiMisi::create([
            'visi'=> $request->visi,
            'misi'=> $request->misi
        ]);
        return redirect('/showvisimisi');

    }

    public function showvisimisi(Request $request)
    {
        $vm = DB::table('visimisi')->get();
        return view('showvisimisi', compact('vm'));
    }

    public function update1(Request $request, $id)
    {
        $vm=VisiMisi::find($id);
        $vm->update([
            'visi'=>$request->visi,
            'misi'=>$request->misi
        ]);
        return redirect('showvisimisi');
        
    }

    public function view1()
    {
        $vm = DB::table('visimisi')->get();
      return view('edit1', compact('vm'));
    }




    public function inputtugasfungsi()
    {
        return view ('/inputtugasfungsi');

    }
    public function store2(Request $request)
    {
        // dd($request->all());
        $up=substr($request->tugas, 3,-4);
        $down=substr($request->tugas, 3,-4);
        TugasFungsi::create([
            'tugas'=> $up,
            'fungsi'=> $down
        ]);
        return redirect('/showtugasfungsi');

    }

    public function showtugasfungsi(Request $request)
    {
        $tf = DB::table('tugas_fungsi')->get();
        return view('showtugasfungsi', compact('tf'));
    }

    public function update2(Request $request, $id)
    {
        $tf=TugasFungsi::find($id);
        $up=substr($request->tugas, 3,-4);
        $down=substr($request->tugas, 3,-4);
        $tf->update([
            'tugas'=>$up,
            'fungsi'=>$down
        ]);
        return redirect('showtugasfungsi');
        
    }
    public function view2()
    {
        $tf = DB::table('tugas_fungsi')->get();
      return view('edit2', compact('tf'));
    }



    // sejarah
    public function inputsejarah()
    {
        return view ('/inputsejarah');

    }
    public function store3(Request $request)
    {
         
        $image = $request->gambar;
        $new_image = time().$image->getClientOriginalName();
        $up=substr($request->sejarah, 3,-4);
        $sj = Sejarah::create([
            'sejarah' => $up,
            'gambar' => 'public/struktororg/'.$new_image
        ]);

        $image->move('public/struktororg/', $new_image);

        return redirect('showsejarah');


    }

    public function showsejarah(Request $request)
    {
        $sj = DB::table('sejarah')->get();
        return view('showsejarah', compact('sj'));
    }

    public function update3(Request $request, $id)
    {
        $sj=Sejarah::find($id);
        $up=substr($request->sejarah, 3,-4);
        File::delete($sj->image);
        $file = $request->file('gambar');
        $file->move('public/struktororg/',$file->getClientOriginalName());
        $sj->update([
            'sejarah' => $up,
            'gambar' => 'public/struktororg/'.$file->getClientOriginalName(),
        ]);
        return redirect('showsejarah');

       
        
    }
    public function view3()
    {
        $sj = DB::table('sejarah')->get();
      return view('edit3', compact('sj'));
    }
    




    //galeriupt
    public function inputgaleriupt()
    {
        $gl = Galeriupt::latest()->get();
        return view('inputgaleriupt');
    }

    public function store4(Request $request)
    {
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

        return redirect('inputgaleriupt');
    }

    public function showgaleriupt(Request $request)
    {
        $gl = DB::table('galeriupt')->get();
        return view('showgaleriupt', compact('gl'));
    }

    public function view4($id)
    {
        $gl=Galeriupt::find($id);
        return view('edit4',compact('gl'));
    }

    public function update4(Request $request, $id)
    {
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
        return redirect('showgaleriupt');

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



    //Potensi Ekonomi

    public function inputpotensiekonomi1()
    {
        $pe = PotensiEkonomi1::latest()->get();
        return view('inputpotensiekonomi1');
    }

    public function store5(Request $request)
    {
        // dd($request->all());
        $up1=substr($request->kayu, 3,-4);
        $up2=substr($request->nonkayu, 3,-4);
        // $up3=substr($request->jasalingkungan,);
        // $up4=substr($request->bisnis, );
        $up5=substr($request->donor, 3,-4);
        $pe = PotensiEkonomi1::create([
            'kayu' => $up1,
            'nonkayu' => $up2,
            'jasalingkungan' => $request->jasalingkungan,
            'bisnis' => $request->bisnis,
            'donor' => $up5,
        ]);

        return redirect('showpotensiekonomi1');
    }

    public function showpotensiekonomi1(Request $request)
    {
        $pe = DB::table('potensiekonomi1')->get();
        return view('showpotensiekonomi1', compact('pe'));
    }

    public function view5($id)
    {
        $pe=PotensiEkonomi1::find($id);
        return view('editpotensiekonomi1',compact('pe'));
    }

    public function update5(Request $request, $id)
    {
        $pe=PotensiEkonomi1::find($id);
        $up1=substr($request->kayu, 3,-4);
        $up2=substr($request->nonkayu, 3,-4);
        $up5=substr($request->donor, 3,-4);
        $pe->update([
            'kayu' => $up1,
            'nonkayu' => $up2,
            'jasalingkungan' => $request->jasalingkungan,
            'bisnis' => $request->bisnis,
            'donor' => $up5,
        ]);
        return redirect('showpotensiekonomi1');

    }

    public function ajaxekonomi1(){
        $pe = DB::table('potensiekonomi1')->get();
        return view('ajaxekonomi1',compact('pe'));

    }




    
    //Jasa Lingkungan1
    public function inputjasalingkungan1()
    {
        $jl = JasaLingkungan1::latest()->get();
        return view('inputjasalingkungan1');
    }

    public function store6(Request $request)
    {
        // dd($request->all());
        $jl = JasaLingkungan1::create([
            'provinsi' => $request->provinsi,
            'jenis_jasa_lingkungan'  => $request->jenis_jasa_lingkungan,
            'satuan' => $request->satuan,
            'keunggulan' => $request->keunggulan,
            'lintang'  => $request->lintang,
            'bujur' => $request->bujur,
            'pengembangan' => $request->pengembangan,
            'tahapan' => $request->tahapan,
            'periode' => $request->periode,
            'hasil' => $request->hasil,

        ]);

        return redirect('showjasalingkungan1');
    }

    public function update6(Request $request, $id)
    {
        $pe=PotensiEkonomi1::find($id);
        $up1=substr($request->kayu, 3,-4);
        $up2=substr($request->nonkayu, 3,-4);
        $up5=substr($request->donor, 3,-4);
        $pe->update([
            'kayu' => $up1,
            'nonkayu' => $up2,
            'jasalingkungan' => $request->jasalingkungan,
            'bisnis' => $request->bisnis,
            'donor' => $up5,
        ]);
        return redirect('showjasalingkungan1');

    }


    public function showjasalingkungan1(){
        $jl = DB::table('jasalingkungan1')->get();
        return view('showjasalingkungan1',compact('jl'));

    }

    public function view6()
    {
        $jl=JasaLingkungan1::all();
        foreach($jl as $jl)
        {
            $jl->action='<a href="edit/'.$jl->id.'" class="btn btn-warning btn-sm" id="update'.$jl->id.'">Edit</a>
            <a href="delete/'.$jl->id.'" class="btn btn-danger btn-sm" id="'.$jl->id.'" >Delete</a>';
        }
        
        return response()->json($jl,200);

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
