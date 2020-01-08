@extends('layouts.menu')

@section('title', ' Index Peminjaman  ')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>INDEX Peminjaman </h2>
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
            <th>ID Detail Pinjam</th>
            <th>ID Inventaris </th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Jumlah </th>
            <th>ID Pegawai</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($peminjamans as $a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->id }}</td>
            <td>{{ $a->id_inventaris }}</td>
            <td>{{ $a->tanggal_pinjam }}</td>
            <td>{{ $a->tanggal_kembali }}</td>
            <td>{{ $a->jumlah }}</td>
            <td>{{ $a->id_pegawai }}</td>
        
            
            <td>
                <form action="{{ route('peminjamans.destroy',$a->id) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('peminjamans.edit',$a->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $peminjamans->links() !!}
      
@endsection