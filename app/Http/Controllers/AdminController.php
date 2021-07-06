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
        TugasFungsi::create([
            'tugas'=> $request->tugas,
            'fungsi'=> $request->fungsi
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
        $tf->update([
            'tugas'=>$request->tugas,
            'fungsi'=>$request->fungsi
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
        // dd($request->all());
        Sejarah::create([
            'sejarah'=> $request->sejarah,
            'gambar' => $request->gambar
        ]);
        return redirect('/showsejarah');

    }

    public function showsejarah(Request $request)
    {
        $sj = DB::table('sejarah')->get();
        return view('showsejarah', compact('sj'));
    }

    public function update3(Request $request, $id)
    {
        $sj=Sejarah::find($id);
        $sj->update([
            'sejarah'=>$request->sejarah,
            'gambar'=>$request->gambar
        ]);
        return redirect('showsejarah');
        
    }
    public function view3()
    {
        $sj = DB::table('sejarah')->get();
      return view('edit3', compact('sj'));
    }   


}
