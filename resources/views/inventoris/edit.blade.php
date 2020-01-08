@extends('layouts.menu')

@section('title', 'Edit Inventaris')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Inventaris</h2>
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
  
    <form action="{{ route('inventoris.update',$inventori->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama :</strong>
                    <input type="text" name="nama" value="{{ $inventori->nama }}" class="form-control" placeholder="Merk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kondisi :</strong>
                    <input type="text" name="kondisi" value="{{ $inventori->kondisi }}" class="form-control" placeholder="Merk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan :</strong>
                    <input type="text" name="keterangan" value="{{ $inventori->keterangan }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah :</strong>
                    <input type="number" name="jumlah" value="{{ $inventori->jumlah }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Jenis :</strong>
                    <select class="form-control" name="id_jenis">
                <?php foreach ($jenis as $jenis) { ?>
                   <option value="{{ $jenis->id }}" <?php if ($jenis->id==$inventori->id) {
                       echo "selected"; } ?>> {{$jenis->id}} - {{ $jenis->nama_jenis }} </option>
                <?php  } ?>
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Register :</strong>
                    <input type="date" name="tanggal_register" value="{{ $inventori->tanggal_register }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Ruang :</strong>
                    <select class="form-control" name="id_ruang">
                <?php foreach ($ruang as $ruang) { ?>
                   <option value="{{ $ruang->id }}" <?php if ($ruang->id==$inventori->id) {
                       echo "selected"; } ?>> {{$ruang->id}} - {{ $ruang->nama_ruang }} </option>
                <?php  } ?>
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Inventaris  :</strong>
                    <input type="text" name="kode_inventori" value="{{ $inventori->kode_inventori }}" class="form-control" placeholder="" readonly="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Petugas  :</strong>
                    <input type="text" name="id_petugas" value="{{ $inventori->id_petugas }}" class="form-control" placeholder="" readonly="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
   
    </form>
@endsection