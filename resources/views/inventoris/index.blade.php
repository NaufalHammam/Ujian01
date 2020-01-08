@extends('layouts.menu')

@section('title', ' Index Inventaris')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>INDEX Inventaris</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('inventoris.create') }}"> Create New Inventaris</a>
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
            <th>ID Inventaris</th>
            <th>Nama </th>
            <th>Kondisi </th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>ID Jenis</th>
            <th>Tanggal Register</th>
            <th>ID Ruang</th>
            <th>Kode Inventaris</th>
            <th>ID Petugas</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($inventoris as $a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->id }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->kondisi }}</td>
            <td>{{ $a->keterangan }}</td>
            <td>{{ $a->jumlah }}</td>
            <td>{{ $a->id_jenis }}</td>
            <td>{{ $a->tanggal_register }}</td>
            <td>{{ $a->id_ruang }}</td>
            <td>{{ $a->kode_inventori }}</td>
            <td>{{ $a->id_petugas }}</td>
            <td>
                <form action="{{ route('inventoris.destroy',$a->id) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('inventoris.edit',$a->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $inventoris->links() !!}
      
@endsection