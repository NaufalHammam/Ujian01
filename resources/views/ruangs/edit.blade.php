@extends('layouts.menu')

@section('title', 'Edit Ruang')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Ruang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ruangs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('ruangs.update',$ruang->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Ruang :</strong>
                    <input type="text" name="nama_ruang" value="{{ $ruang->nama_ruang }}" class="form-control" placeholder="Merk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Ruang :</strong>
                    <input type="text" name="kode_ruang" value="{{ $ruang->kode_ruang }}" readonly class="form-control" placeholder="Merk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan :</strong>
                    <input type="text" name="keterangan" value="{{ $ruang->nama_ruang }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
   
    </form>
@endsection