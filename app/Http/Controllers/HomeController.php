<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\counter;

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

       public function showartikel()
       {

        $art = DB::table('artikel')->get();
        return view('artikel.showartikel', compact('art'));
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
       public function getartikel(Request $request, $id)
           {
               $art=Artikel::find($id);
               $up=substr($request->artikel, 3,-4);
               $file = $request->file('gambar');
               $file->get('public/artikel/',$file);
               $art->get([
                   'judul' => $request->judul,
                   'artikel' => $up,
                   'gambar' => 'public/artikel/'.$file,
               ]);
               return redirect('showartikel');

           }
       public function viewartikel()
       {
           $art = DB::table('artikel')->get();
         return view('artikel.editartikel', compact('art'));
       }


}
