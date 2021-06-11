<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('landingpage', compact('firstImage','secondImage','thirdImage','firstUrl','secondUrl','thirdUrl','firstTitle','secondTitle','thirdTitle'));
    }
}
