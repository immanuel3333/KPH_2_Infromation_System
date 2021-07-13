<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class SejarahController extends Controller
{
    public function index()
{
$data['sejarah'] = Product::orderBy('id','desc')->paginate(10);
return view('Uploadsejarah.indec',$data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('Uploadsejarah.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'judul' => 'required',
'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
'sejarah' => 'required',
]);
if ($files = $request->file('image')) {
$destinationPath = 'public/image/'; // upload path
$profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
$files->move($destinationPath, $profileImage);
$insert['image'] = "$profileImage";
}
$insert['title'] = $request->get('title');
$insert['description'] = $request->get('description');
Sejarah::insert($request->all());
return Redirect::to('Uploadsejarah')
->with('success','Greate! Product created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function show(Request $request)
{
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$where = array('id' => $id);
$data['product_info'] = Sejarah::where($where)->first();
return view('Uploadsejarah.edit', $data);
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    public function index()
    {
    $data['sejarah'] = Sejarah::orderBy('id','desc')->paginate(10);
    return view('Uploadsejarah.index',$data);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    return view('Uploadsejarah.create');
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
    $request->validate([
    'judul' => 'required',
    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    'sejarah' => 'required',
    ]);
    if ($files = $request->file('image')) {
    $destinationPath = 'public/image/'; // upload path
    $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
    $files->move($destinationPath, $profileImage);
    $insert['image'] = "$profileImage";
    }
    $insert['title'] = $request->get('title');
    $insert['description'] = $request->get('description');
    Sejarah::insert($request->all());
    return Redirect::to('Uploadsejarah')
    ->with('success','Greate! Product created successfully.');
    }
    /**
    * Display the specified resource.
    *
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
    public function show(Request $request)
    {
    }
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
    $where = array('id' => $id);
    $data['product_info'] = Sejarah::where($where)->first();
    return view('Uploadsejarah.edit', $data);
    }
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    $request->validate([
    'title' => 'required',
    'product_code' => 'required',
    'description' => 'required',
    ]);
    $update = ['title' => $request->title, 'description' => $request->description];
    if ($files = $request->file('image')) {
    $destinationPath = 'public/image/'; // upload path
    $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
    $files->move($destinationPath, $profileImage);
    $update['image'] = "$profileImage";
    }
    $update['title'] = $request->get('title');
    $update['product_code'] = $request->get('product_code');
    $update['description'] = $request->get('description');
    Sejarah::where('id',$id)->update($update);
    return Redirect::to('Uploadsejarah')
    ->with('success','Great! Product updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
    Product::where('id',$id)->delete();
    return Redirect::to('Uploadsejarah')->with('success','Product deleted successfully');
    }
}
