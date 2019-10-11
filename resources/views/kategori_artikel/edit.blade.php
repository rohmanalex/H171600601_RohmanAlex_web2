@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-light">Edit Kategori Artikel</div>
             
             <div class="card-body">
                {!! Form::model($kategori_artikel, ['route' => ['kategori_artikel.update', $kategori_artikel->id],'method' => 'patch']) !!}
             	@include('kategori_artikel.form')
             	{!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>   
</div>

@endsection