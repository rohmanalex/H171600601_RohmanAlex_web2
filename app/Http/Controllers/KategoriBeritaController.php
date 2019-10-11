<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    function index()
    {
        $KategoriBerita=KategoriBerita::all();

        return view ('kategori_berita.index',compact('KategoriBerita'));
    }

    public function show($id)
    {
    
        $kategori_berita=KategoriBerita::find($id);
        if (empty($kategori_berita))
            { return redirect(route('kategori_berita.index')); }

    	return view('kategori_berita.show',compact( 'kategori_berita'));
    }

    public function create()
    {
        
    	return view( 'kategori_berita.create');
    }
    
    public function store(Request $request)
    {
        $input=$request->all();
        KategoriBerita::create($input);

        return redirect()->route('kategori_berita.index')->with ('alert-success','Data berhasi ditambah!');
    }

    public function edit($id)
    {
    
    	$kategori_berita=KategoriBerita::find($id);

        if (empty($kategori_berita))
        { return redirect(route('kategori_berita.index')); }

        return view( 'kategori_berita.edit',compact( 'kategori_berita'));
    }

    public function update($id,Request $request)
    {
    
    	$kategori_berita=KategoriBerita::find($id);
        $input= $request->all();

        if (empty($kategori_berita))
        { return redirect(route('kategori_berita.index')); }

        $kategori_berita->update($input);
        return redirect(route('kategori_berita.index'));
        
    }

    public function destroy($id)
    {
    
    	$kategori_berita=KategoriBerita::find($id);

        if (empty($kategori_berita))
        { return redirect(route('kategori_berita.index')); }

        $kategori_berita->delete();
        return redirect(route('kategori_berita.index'));
    }

         public function trash()
    {
        $KategoriBerita=KategoriBerita::onlyTrashed()
        ->whereNotNull('deleted_at')
        ->get();
        
        return view('kategori_berita.index',compact('KategoriBerita'));
    }

 

}
