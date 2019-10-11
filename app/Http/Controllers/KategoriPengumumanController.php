<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    function index(){
        $KategoriPengumuman=KategoriPengumuman::all();

        return view ('kategori_pengumuman.index',compact('KategoriPengumuman'));
    }

    public function show($id)
    {
    
    	$kategori_pengumuman=KategoriPengumuman::find($id);

    	return view(  'kategori_pengumuman.show',compact( 'kategori_pengumuman'));
    }

    public function create()
    {

    	return view( 'kategori_pengumuman.create');
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	KategoriPengumuman::create($input);

    	return redirect(route('kategori_pengumuman.index'));
    }

    public function edit($id)
    {
    
    	$kategori_pengumuman=KategoriPengumuman::find($id);

        if (empty($kategori_pengumuman))
        { return redirect(route('kategori_pengumuman.index')); }

        return view( 'kategori_pengumuman.edit',compact( 'kategori_pengumuman'));
    }

    public function update($id,Request $request)
    {
    
    	$kategori_pengumuman=KategoriPengumuman::find($id);
        $input= $request->all();

        if (empty($kategori_pengumuman))
        { return redirect(route('kategori_pengumuman.index')); }

        $kategori_pengumuman->update($input);
        return redirect(route('kategori_pengumuman.index'));
        
    }

    public function destroy($id)
    {
    
    	$kategori_pengumuman=KategoriPengumuman::find($id);

        if (empty($kategori_pengumuman))
        { return redirect(route('kategori_pengumuman.index')); }

        $kategori_pengumuman->delete();
        return redirect(route('kategori_pengumuman.index'));
    }

    public function trash()
    {
        $KategoriPengumuman=KategoriPengumuman::onlyTrashed()
        ->whereNotNull('deleted_at')
        ->get();
        
        return view('kategori_pengumuman.index',compact('KategoriPengumuman'));
    }
}
