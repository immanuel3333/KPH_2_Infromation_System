<?php

namespace App\Http\Controllers;

use App\Peraturan;
use Illuminate\Http\Request;
use DB;
use File;
class PeraturanController extends Controller
{
    public function inputperaturan()
    {
        $law = Peraturan::latest()->get();
        return view('peraturans.create');
    }

    public function storeperaturan(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
            'file' => 'required'
        ]);
        // dd($request->all());
        $file = $request->file;
        $new_file = time().$file->getClientOriginalName();
        $law = Peraturan::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'file' => 'public/peraturan/'.$new_file,

        ]);

        $file->move('public/peraturan/', $new_file);
        return redirect('peraturans');
    }

    public function updateperaturan(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
            'file' => 'required'
        ]);
        $law=Peraturan::find($id);
        File::delete($law->file);
        $file = $request->file('file');
        $law->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'file'=>'public/peraturan/'.$file->getClientOriginalName(),

        ]);
        return redirect('peraturans');

    }

    public function peraturan()
       {
           $law = DB::table('peraturan')->get();
           return view('peraturans.index',compact('law'));
       }

    public function viewperaturan1()
    {
        $law=Peraturan::all();
        foreach($law as $law2)
        {
            $law2->action='<a href="viewfasilitas12/'.$law2->id.'" class="btn btn-warning btn-sm" id="update'.$law2->id.'">Edit</a>
            <a href="delete/'.$law2->id.'" class="btn btn-danger btn-sm" id="'.$law2->id.'" >Delete</a>';
        }

        return response()->json($law,200);
        // return dd($jl);

    }

    public function viewperaturan12($id)
       {
        $law=Peraturan::find($id);
        return view('peraturans.edit',compact('law'));
       }

       public function destroy($id)
       {
           $law = Peraturan::findorfail($id);
           $law->delete();

           return redirect()->back()->with('success','Post Berhasil Dihapus (Silahkan cek trashed post)');
       }
       public function kill($id){
        $law = Peraturan::withTrashed()->where('id', $id)->first();
        $law->forceDelete();

        return redirect()->back()->with('success','Post Berhasil Dihapus Secara Permanen');
    }
}
