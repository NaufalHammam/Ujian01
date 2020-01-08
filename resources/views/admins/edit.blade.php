@extends('layouts.menu')

@section('title', 'Edit Petugas')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Admin</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Admin :</strong>
                    <input type="text" name="nama_petugas" value="  {{ Auth::user()->nama_petugas }} " class="form-control" placeholder="Name" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                <input type="email" name="email" value=" {{ Auth::user()->email }}" class="form-control" placeholder="Email" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username :</strong>
                <input type="text" name="username" value=" {{ Auth::user()->username }}" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password :</strong>
                <input type="text" name="password" value=" {{ Auth::user()->password }}" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Level :</strong>
                <select class="form-control" name="id_level">
                <?php foreach ($level as $level) { ?>
                   <option value="{{ $level->id }}" <?php if ( $level->id==Auth::user()->id_level ) {
                       echo "selected"; } ?>> {{$level->id}} - {{ $level->nama_level }} </option>
                <?php  } ?>
                </select>
            </div>
        </div>
        

            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
   
    </form>
@endsection