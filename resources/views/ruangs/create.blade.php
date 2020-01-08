@extends('layouts.menu')

@section('title', 'create Ruang')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Ruang</h2>
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
   
<form action="{{ route('ruangs.store') }}" method="POST">
    @csrf
  
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ruang :</strong>
                <input type="text" name="nama_ruang" class="form-control" placeholder="Nama Ruang">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Ruang :</strong>
                <input type="text" name="kode_ruang" class="form-control" value="R-{{rand()}}"  readonly placeholder="Nama Ruang">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                <input type="text" name="keterangan" class="form-control" style="height:150px" placeholder="Nama Ruang">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection