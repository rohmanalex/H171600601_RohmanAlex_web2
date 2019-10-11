@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center bg-warning">Artikel</div>
                
                <div class="card-body">
                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">ID</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $galeri->id !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Nama</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $galeri->nama !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Keterangan</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $galeri->keterangan !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Path</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $galeri->path !!}</label>
                    </div>

                     <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">User Id</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $galeri->users_id !!}
                         </label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Create</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $galeri->created_at->format('d/m/Y H:i:s') !!}</label>
                    </div>

                    
                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-2">
                            <a href="{!! route('galeri.index')!!}" class="btn btn-primary">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection