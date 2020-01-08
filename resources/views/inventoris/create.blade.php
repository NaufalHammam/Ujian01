@extends('layouts.menu')

@section('title', 'create Inventaris')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Inventaris</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inventoris.index') }}"> Back</a>
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
   
<form action="{{ route('inventoris.store') }}" method="POST">
    @csrf
  
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi :</strong>
                <input type="text" name="kondisi" class="form-control" placeholder=" Kondisi">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah :</strong>
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID jenis :</strong>
                <select name="id_jenis" class="form-control">
                @foreach($jenis as $jenis)
                <option value="{{ $jenis->id }}" >{{ $jenis->id }} - {{ $jenis->nama_jenis }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Register :</strong>
                <input type="date" name="tanggal_register" class="form-control" placeholder="tanggal_register ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Ruang :</strong>
                <select name="id_ruang" class="form-control">
                @foreach($ruang as $ruang)
                <option value="{{ $ruang->id }}" >{{ $ruang->id }} - {{ $ruang->nama_ruang }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Inventaris :</strong>
                <input type="text" name="kode_inventori" class="form-control" value="I-{{rand()}}" readonly placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Petugas :</strong>
                <input type="text" name="id_petugas" class="form-control" value="{{ Auth::user()->id }}" readonly placeholder="">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection