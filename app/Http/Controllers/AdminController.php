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


   






}
