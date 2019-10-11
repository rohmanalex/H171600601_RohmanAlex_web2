@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-light">Edit Kategori Galeri</div>
             
             <div class="card-body">
                {!! Form::model($kategori_pengumuman, ['route' => ['kategori_pengumuman.update', $kategori_pengumuman->id],'method' => 'patch']) !!}
             	@include('kategori_pengumuman.form')
             	{!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>   
</div>

@endsection