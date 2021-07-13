<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataUmumController extends Controller
{
    public function index()
       {
           return view('dataumum.index');
       }

       public function home()
       {
           return view('dataumum.home');
       }

       public function kepalakph()
       {
           return view('dataumum.kepalakph');
       }
       public function fasilitas()
       {
           return view('dataumum.fasilitas');
       }
       public function lembaga()
       {
           return view('dataumum.lembaga');
       }
       public function rphjp()
       {
           return view('dataumum.rphjp');
       }

}
