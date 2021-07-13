<?php

namespace App\Http\Controllers;

use App\Peraturan;
use Illuminate\Http\Request;
use DB;
use File;

class PeraturanController extends Controller
{
    public function index()
    {

        $blogs = Peraturan::latest()->paginate(1);
        return view('peraturans.index', compact('blogs'));
    }
    public function show()
    {
        $blogs = Peraturan::latest()->paginate(1);
        return view('peraturans.show', compact('blogs'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('peraturans.create');
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
            'judul' => 'required',
            'keterangan' => 'required',
            'file' => 'required'
        ]);

        //upload image
        $file = $request->file;
        $new_file = time().$file->getClientOriginalName();

        $blogs = Peraturan::create([
            'judul' => $request->judul,
            'keterangan' =>  $request->keterangan,
            'file' => 'public/peraturan/'.$new_file,
        ]);

        $file->move('public/peraturan/', $new_file);

        if($blogs){
            //redirect dengan pesan sukses
            return redirect()->route('peraturans.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('peraturans.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * edit
     *
     * @param  mixed $blog
     * @return void
     */
    public function edit()
    {   $blogs= DB::table('peraturan')->get();
        return view('peraturans.edit', compact('blogs'));
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
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required'
         ]);
        // get data Blog by ID
        $blogs = Peraturans::find($id);
        File::delete($blogs->file);
        $file = $request->file('file');
        $file->move('public/peraturan/',$file->getClientOriginalName());

        $blogs->update([
             'file'=>'public/peraturan/'.$file->getClientOriginalName(),

         ]);

            return redirect()->route('peraturans.index');

    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $blogs = Peraturan::findOrFail($id);
        $blogs->delete();

        if($blogs){
            //redirect dengan pesan sukses
            return redirect()->route('peraturans.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('peraturans.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}
