<?php

namespace App\Http\Controllers;

use App\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function edit(Struktur $id)
    {
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
        //get data Blog by ID
        $blog = Struktur::findorfail($id);

        if($request->file('image') == "") {

            $request->file('image2') == "";
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/strukturorg/'.$blog->image);
            Storage::disk('local')->delete('public/strukturorg/'.$blog->image2);

            //upload new image
            $image = $request->file('image');
            $image2 = $request->file('image2');
            $image->storeAs('public/strukturorg', $image->hashName());
            $image2->storeAs('public/strukturorg', $image2->hashName());

            $blog->update([
                'image'     => $image->hashName(),
                'image2'     => $image2->hashName()
            ]);

        }

        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('strukturs.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('strukturs.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
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
