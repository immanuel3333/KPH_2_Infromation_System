<?php

namespace App\Http\Controllers;

use App\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use File;

class StrukturController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {

        $blogs = Struktur::latest()->paginate(1);
        return view('strukturs.index', compact('blogs'));
    }
    public function show()
    {
        $blogs = Struktur::latest()->paginate(1);
        return view('strukturs.show', compact('blogs'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('strukturs.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required',
            'image2'     => 'required'
        ]);

        //upload image
        $image = $request->image;
        $image2 = $request->image2;
        $new_image = time().$image->getClientOriginalName();
        $new_image2 = time().$image2->getClientOriginalName();

        $blog = Struktur::create([
            'image' => 'public/struktororg/'.$new_image,
            'image2' => 'public/struktororg/'.$new_image2
        ]);

        $image->move('public/struktororg/', $new_image);
        $image2->move('public/struktororg/', $new_image2);

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('strukturs.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('strukturs.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit()
    {   $strukturs= DB::table('strukturs')->get();
        return view('strukturs.edit', compact('strukturs'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $blog
     * @return void
     */
    public function update(Request $request, $id)
    {
        // get data Blog by ID
            $blog = Struktur::find($id);
            File::delete($blog->image);
            File::delete($blog->image2);
            $file = $request->file('image');
            $file2 = $request->file('image2');
            $file->move('public/struktororg/',$file->getClientOriginalName());
            $file2->move('public/struktororg/',$file2->getClientOriginalName());

            $blog->update([
                 'image'=>'public/struktororg/'.$file->getClientOriginalName(),
                 'image2'=>'public/struktororg/'.$file2->getClientOriginalName(),

             ]);
            
                return redirect()->route('strukturs.index');
                // dd($blog);
            
            
                // $blog = Struktur::findorfail($id);

                // $blog->update([
                //     'image'=>'public/struktororg/'.$file->getClientOriginalName(),
                //     'image2'=>'public/struktororg/'.$file->getClientOriginalName(),
                // ]);
                // $request->image->move(public_path().'public/struktororg/', $awal);
                // $request->image->move(public_path().'public/struktororg/', $awal2);
                // $ubah->update($blog);
                // return redirect()->route('strukturs.index');
                
          
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $blog = Struktur::findOrFail($id);
        $blog->delete();

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('strukturs.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('strukturs.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}
