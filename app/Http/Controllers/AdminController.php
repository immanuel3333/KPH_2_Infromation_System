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
        $visimisi = DB::table('visimisi')->get();
        return view('showvisimisi',['visimisi' => $visimisi]);
    }

    public function editvisimisi($id)
    {
        $vm = VisiMisi::findorfail($id);
        return view ('/editvisimisi', compact('vm'));

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
        $tugasfungsi = DB::table('tugas_fungsi')->get();
        return view('showtugasfungsi',['tugasfungsi' => $tugasfungsi]);
    }

   
    public function edittugasfungsi($id)
    {
        $tf = TugasFungsi::find($id);
        return view ('/edittugasfungsi',['tugasfungsi'=>$tf]);

    }
    public function update2(Request $request, $id)
    {
        $tf=TugasFungsi::find($id);
        $tf->update([
            'tugas'=>$request->tugas,
            'fungsi'=>$request->fungsi
        ]);
        return redirect('/showtugasfungsi');
    }
    


}
