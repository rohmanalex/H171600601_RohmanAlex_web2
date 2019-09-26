<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Pengumuman;

class Kategori_PengumumanController extends Controller
{
      public function index()
    {
    	$kategori_pengumuman=kategori_pengumuman::all();
    	return view('kategori_pengumuman.index',compact('kategori_pengumuman'));

    }

 public function create()
 {

 }
 public function update(Request $request, $id)
 {

 }
 public function destroy($id)
 {

 }
}
