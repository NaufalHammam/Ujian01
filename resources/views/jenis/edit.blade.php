@extends('layouts.menu')

@section('title', 'Edit Jenis')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jenis.index') }}"> Back</a>
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
  
    <form action="{{ route('jenis.update',$jeni->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Jenis :</strong>
                    <input type="text" name="nama_jenis" value="{{ $jeni->nama_jenis }}" class="form-control" placeholder="Jenis">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Jenis :</strong>
                    <input type="text" name="kode_jenis" value="{{ $jeni->kode_jenis }}" class="form-control" placeholder="" value="kode_jenis" readonly>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan :</strong>
                    <input type="text"  name="keterangan" value="{{ $jeni->keterangan }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>

            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
   
    </form>
@endsection