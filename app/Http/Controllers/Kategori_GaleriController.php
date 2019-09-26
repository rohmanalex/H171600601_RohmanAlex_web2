<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Galeri;

class Kategori_GaleriController extends Controller
{
     public function index()
    {
    	$kategori_galeri=kategori_galeri::all();
    	return view('kategori_galeri.index',compact('kategori_galeri'));

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
