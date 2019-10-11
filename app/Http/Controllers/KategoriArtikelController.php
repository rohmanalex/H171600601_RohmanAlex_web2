<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{

    public function index()
    {
        $KategoriArtikel=KategoriArtikel::all();
        
        return view('kategori_artikel.index',compact('KategoriArtikel'));
    }

    public function show($id)
    {
    
        $kategori_artikel=KategoriArtikel::find($id);

        if (empty($kategori_artikel))
            { return redirect(route('kategori_artikel.index')); }

    	return view('kategori_artikel.show',compact( 'kategori_artikel'));
    }

    public function create()
    {

    	return view( 'kategori_artikel.create');
    }
    
    public function store(Request $request)
    {
    	$input= $request->all();
    	KategoriArtikel::create($input);

    	return redirect(route('kategori_artikel.index'));
    }

    public function edit($id)
    {
    
    	$kategori_artikel=KategoriArtikel::find($id);

        if (empty($kategori_artikel))
        { return redirect(route('kategori_artikel.index')); }

        return view( 'kategori_artikel.edit',compact( 'kategori_artikel'));
    }

    public function update($id,Request $request)
    {
    
    	$kategori_artikel=KategoriArtikel::find($id);
        $input= $request->all();

        if (empty($kategori_artikel))
        { return redirect(route('kategori_artikel.index')); }

        $kategori_artikel->update($input);
        return redirect(route('kategori_artikel.index'));
        
    }

    public function destroy($id)
    {
    
    	$kategori_artikel=KategoriArtikel::find($id);

        if (empty($kategori_artikel))
        { return redirect(route('kategori_artikel.index')); }

        $kategori_artikel->delete();
        return redirect(route('kategori_artikel.index'));
    }

    public function trash()
    {
        $KategoriArtikel=KategoriArtikel::onlyTrashed()
        ->whereNotNull('deleted_at')
        ->get();
        
        return view('kategori_artikel.index',compact('KategoriArtikel'));
    }

 }
