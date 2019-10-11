<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    function index(){
        $Pengumuman=Pengumuman::all();

        return view ('pengumuman.index',compact('Pengumuman'));
    }
    public function show($id)
    {
    
    	$pengumuman=pengumuman::find($id);

    	return view(  'pengumuman.show',compact( 'pengumuman'));
    }

    public function create()
    {
    	$KategoriPengumuman=KategoriPengumuman::pluck('nama','id');
    	

    	return view( 'pengumuman.create',compact('KategoriPengumuman'));
    }

    public function store(Request $request)
    {
    	$input= $request->all();
    	
    	pengumuman::create($input);

    	return redirect(route('pengumuman.index'));
    }

    public function edit($id)
    {
        $pengumuman=pengumuman::find($id);
    	$KategoriPengumuman=KategoriPengumuman::pluck('nama','id');

        if (empty($pengumuman))
        { return redirect(route('pengumuman.index')); }

        return view( 'pengumuman.edit',compact( 'pengumuman','KategoriPengumuman'));
    }

    public function update($id,Request $request)
    {
    
    	$pengumuman=pengumuman::find($id);
        $input= $request->all();

        if (empty($pengumuman))
        { return redirect(route('pengumuman.index')); }

        $pengumuman->update($input);
        return redirect(route('pengumuman.index'));
        
    }

    public function destroy($id)
    {
    
        $pengumuman=pengumuman::find($id);
        
        if (empty($pengumuman))
        { return redirect(route('pengumuman.index')); }

        $pengumuman->delete();
        return redirect(route('pengumuman.index'));
    }
     public function trash()
    {
        $Pengumuman=Pengumuman::onlyTrashed()
        ->whereNotNull('deleted_at')
        ->get();
        
        return view('pengumuman.index',compact('Pengumuman'));
    }

}
