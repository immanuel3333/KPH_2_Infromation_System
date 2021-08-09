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
        $url = "http://newsapi.org/v2/top-headlines?q=covid&country=id&category=health&sortBy=publishedAt&apiKey=1bc17eb57ac9417eafe4ba36eee8620d";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($response);
        $firstImage = $result->articles[0]->urlToImage;
        $secondImage = $result->articles[1]->urlToImage;
        $thirdImage = $result->articles[2]->urlToImage;
        $firstUrl = $result->articles[0]->url;
        $secondUrl= $result->articles[1]->url;
        $thirdUrl = $result->articles[2]->url;
        $firstTitle = $result->articles[0]->title;
        $secondTitle= $result->articles[1]->title;
        $thirdTitle = $result->articles[2]->title;
        $comments = Comment::where('approve','1')->get();
        $projects = counter::latest()->paginate(5);
        counter::increment('views');
        return view('landingpage', compact('firstImage','secondImage','thirdImage','firstUrl','secondUrl','thirdUrl','firstTitle','secondTitle','thirdTitle','comments','projects'));
    }

    public function comment(Request $request)
        {
                Comment::create([
                    'username' => $request->username,
                    'comment' => $request->comment
                ]);
                return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
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


}
