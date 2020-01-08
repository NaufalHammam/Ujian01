@extends('layouts.menu')

@section('title', ' Index Ruang')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>INDEX Ruang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ruangs.create') }}"> Create New Ruang</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID Ruang</th>
            <th>Nama Ruang</th>
            <th>Kode Ruang</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ruangs as $ruang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ruang->id }}</td>
            <td>{{ $ruang->nama_ruang }}</td>
            <td>{{ $ruang->kode_ruang }}</td>
            <td>{{ $ruang->keterangan }}</td>
            <td>
                <form action="{{ route('ruangs.destroy',$ruang->id) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('ruangs.edit',$ruang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $ruangs->links() !!}
      
@endsection