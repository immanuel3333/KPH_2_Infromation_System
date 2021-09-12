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
use App\Artikel;




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
        $gl = Galeriupt::latest()->get();
        return view('showgaleriupt', compact('gl'));
    }

    public function viewgaleriupt($id)
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


    public function destroygaleriupt($id)
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

    //ARTIKEL

   
    public function showartikel()
    {
        $artikelall = Artikel::latest()->get();
        return view('artikel.showartikel', compact('artikelall'));
    }
    

    public function comment(Request $request)
        {
                Comment::create([
                    'username' => $request->username,
                    'comment' => $request->comment
                ]);
                return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
       }

       public function article()
       {
           $art = DB::table('artikel')->get();
           return view ('artikel.index', compact('art'));
       }
       public function inputartikel()
            {
                $art = Artikel::latest()->get();
                return view('artikel.inputartikel');
            }

       public function storeartikel(Request $request)
       {

           $image = $request->gambar;
           $new_image = time().$image->getClientOriginalName();
           $up=substr($request->artikel, 3,-4);
           $art = Artikel::create([
               'judul' => $request->judul,
               'artikel' => $up,
               'gambar' => 'public/artikel/'.$new_image
           ]);

           $image->move('public/artikel/', $new_image);


           return redirect('indexartikel');


       }

       public function updateartikel(Request $request, $id)
       {
           $art=Artikel::find($id);
           $up=substr($request->artikel, 3,-4);
           File::delete($art->image);
           $file = $request->file('gambar');
           $file->move('public/artikel/',$file->getClientOriginalName());
           $art->update([
               'judul' => $request->judul,
               'artikel' => $up,
               'gambar' => 'public/artikel/'.$file->getClientOriginalName(),
           ]);
           return redirect('indexartikel');

       }

       public function viewartikel($id)
       {
        $art=Artikel::find($id);
        return view('artikel.editartikel',compact('art'));
       }

       public function deleteartikel($id)
        {
            $art=Artikel::find($id);
            $art->delete();
            return redirect('indexartikel');
        }



}


