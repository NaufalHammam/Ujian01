@extends('layouts.menu')

@section('title', 'create Peminjaman')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Peminjaman</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('peminjamans.index') }}"> Back</a>
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
   
<form action="{{ route('jenis.store') }}" method="POST">
    @csrf
  
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama  Jenis :</strong>
                <input type="text" name="nama_jenis" class="form-control" placeholder="Nama Jenis">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Jenis :</strong>
                <input type="text" name="kode_jenis" class="form-control" value="J-{{rand()}}" readonly placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input class="form-control"  name="keterangan" placeholder="Keterangan">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection