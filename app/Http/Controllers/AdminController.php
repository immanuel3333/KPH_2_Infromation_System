<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\counter;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        return view('inputvisimisi');
    }

    public function showvisimisi(Request $req)
    {
        $visi = $req->visi;
        $misi = $req->misi;
        return view('showvisimisi', ['var_visi'=>$visi, 'var_misi'=>$misi]);
    }
}
