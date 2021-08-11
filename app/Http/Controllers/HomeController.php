<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\counter;
use App\Struktur;
use App\Identitas;
use App\Identitas2;
use App\Identitas3;
use App\Identitas4;
use App\Artikel;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function banner()
    {
        $artikel = Artikel::latest()->get()->random(2);
        $comments = Comment::where('approve','1')->get();
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        return view('landingpage', compact('comments','projects','artikel'));
    }

    public function showartikelid(Artikel $artikel)
    {
        $artikel_detail = $artikel;
         return view('artikel.artikel-detail',compact('artikel_detail'));
        // dd($artikel);
    }

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

    public function showvisimisi(Request $request)
    {
        $vm = DB::table('visimisi')->get();
        return view('beranda.visimisi', compact('vm'));
    }

    public function showsejarah(Request $request)
    {
        $sj = DB::table('sejarah')->get();
        return view('beranda.sejarah', compact('sj'));
    }

    public function showstruktur()
    {
        $blogs = Struktur::latest()->paginate(1);
        return view('beranda.struktur', compact('blogs'));
    }

    public function showtugasfungsi(Request $request)
    {
        $tf = DB::table('tugas_fungsi')->get();
        return view('beranda.tugasfungsi', compact('tf'));
    }

    public function showgaleriupt(Request $request)
    {
        $gl = DB::table('galeriupt')->get();
        return view('beranda.galeriupt', compact('gl'));
    }

        public function identitas()
       {
           $idn = Identitas::latest()->get();
           return view('beranda.identitas', compact('idn'));
       }

       public function identitas2()
       {
           $idn = Identitas2::latest()->get();
           return view('beranda.identitas2', compact('idn'));
       }

       public function identitas3()
       {
           $idn = Identitas3::latest()->get();
           return view('beranda.identitas3', compact('idn'));
       }

       public function identitas4()
       {
           $idn = Identitas4::latest()->get();
           return view('beranda.identitas4', compact('idn'));
       }

       public function fasilitas()
       {
           $fs = DB::table('fasilitas')->get();
           return view('beranda.fasilitas',compact('fs'));
       }

       public function fasilitas2()
       {
           $fs = DB::table('fasilitas2')->get();
           return view('beranda.fasilitas2',compact('fs'));
       }

       public function fasilitas3()
       {
           $fs = DB::table('fasilitas3')->get();
           return view('beranda.fasilitas3',compact('fs'));
       }

       public function fasilitas4()
       {
           $fs = DB::table('fasilitas4')->get();
           return view('beranda.fasilitas4',compact('fs'));
       }

       public function kepalakph()
       {
        $kkph = DB::table('kepalakph')->get();
        return view('beranda.kepalakph',compact('kkph'));
       }

       public function kepalakph2()
       {
        $kkph = DB::table('kepalakph2')->get();
        return view('beranda.kepalakph2',compact('kkph'));
       }

       public function kepalakph3()
       {
        $kkph = DB::table('kepalakph3')->get();
        return view('beranda.kepalakph3',compact('kkph'));
       }

       public function kepalakph4()
       {
        $kkph = DB::table('kepalakph4')->get();
        return view('beranda.kepalakph4',compact('kkph'));
       }

       public function lembaga()
       {
        $lm = DB::table('lembaga')->get();
           return view('beranda.lembaga',compact('lm'));
       }

       public function lembaga2()
       {
        $lm = DB::table('lembaga2')->get();
           return view('beranda.lembaga2',compact('lm'));
       }

       public function lembaga3()
       {
        $lm = DB::table('lembaga3')->get();
           return view('beranda.lembaga3',compact('lm'));
       }

       public function lembaga4()
       {
        $lm = DB::table('lembaga4')->get();
           return view('beranda.lembaga4',compact('lm'));
       }

       public function rphjp()
       {
           $rp = DB::table('rphjp')->get();
           return view('beranda.rphjp',compact('rp'));
       }

       public function rphjp2()
       {
           $rp = DB::table('rphjp2')->get();
           return view('beranda.rphjp2',compact('rp'));
       }

       public function rphjp3()
       {
           $rp = DB::table('rphjp3')->get();
           return view('beranda.rphjp3',compact('rp'));
       }

       public function rphjp4()
       {
           $rp = DB::table('rphjp4')->get();
           return view('beranda.rphjp4',compact('rp'));
       }

       public function index1()
       {
           return view('beranda.index1');
       }
       public function index2()
       {
           return view('beranda.index2');
       }
       public function index3()
       {
           return view('beranda.index3');
       }
       public function index4()
       {
           return view('beranda.index4');
       }

       public function showkeloladataekonomi1()
       {
           return view('beranda.indexdataekonomi1');
       }

       public function showkeloladataekonomi2()
       {
           return view('beranda.indexdataekonomi2');
       }

       public function showkeloladataekonomi3()
       {
           return view('beranda.indexdataekonomi3');
       }

       public function showkeloladataekonomi4()
       {
           return view('beranda.indexdataekonomi4');
       }

       public function showpotensiekonomi1(Request $request)
        {
            $pe = DB::table('potensiekonomi1')->get();
            return view('beranda.showpotensiekonomi1', compact('pe'));
        }

        public function showpotensiekonomi2(Request $request)
        {
            $pe = DB::table('potensiekonomi2')->get();
            return view('beranda.showpotensiekonomi2', compact('pe'));
        }

        public function showpotensiekonomi3(Request $request)
        {
            $pe = DB::table('potensiekonomi3')->get();
            return view('beranda.showpotensiekonomi3', compact('pe'));
        }

        public function showpotensiekonomi4(Request $request)
        {
            $pe = DB::table('potensiekonomi4')->get();
            return view('beranda.showpotensiekonomi4', compact('pe'));
        }

        public function showjasalingkungan1(){
            $jl = DB::table('jasalingkungan1')->get();
            return view('beranda.showjasalingkungan1',compact('jl'));

        }

        public function showjasalingkungan2(){
            $jl = DB::table('jasalingkungan2')->get();
            return view('beranda.showjasalingkungan2',compact('jl'));

        }

        public function showjasalingkungan3(){
            $jl = DB::table('jasalingkungan3')->get();
            return view('beranda.showjasalingkungan3',compact('jl'));

        }

        public function showjasalingkungan4(){
            $jl = DB::table('jasalingkungan4')->get();
            return view('beranda.showjasalingkungan4',compact('jl'));

        }

        public function showekologi(Request $request)
        {
            $pe = DB::table('ekologi')->get();
            return view('beranda.showekologi', compact('pe'));
        }

        public function showekologi2(Request $request)
        {
            $pe = DB::table('ekologi2')->get();
            return view('beranda.showekologi2', compact('pe'));
        }

        public function showekologi3(Request $request)
        {
            $pe = DB::table('ekologi3')->get();
            return view('beranda.showekologi3', compact('pe'));
        }

        public function showekologi4(Request $request)
        {
            $pe = DB::table('ekologi4')->get();
            return view('beranda.showekologi4', compact('pe'));
        }

        public function showsdm1(Request $request)
        {
            $pe = DB::table('sdm1')->get();
            return view('beranda.showsdm1', compact('pe'));
        }

        public function showsdm2(Request $request)
        {
            $pe = DB::table('sdm2')->get();
            return view('beranda.showsdm2', compact('pe'));
        }

        public function showsdm3(Request $request)
        {
            $pe = DB::table('sdm3')->get();
            return view('beranda.showsdm3', compact('pe'));
        }

        public function showsdm4(Request $request)
        {
            $pe = DB::table('sdm4')->get();
            return view('beranda.showsdm4', compact('pe'));
        }

        public function peraturan()
       {
           $law = DB::table('peraturan')->get();
           return view('beranda.showperaturan',compact('law'));
       }


}
