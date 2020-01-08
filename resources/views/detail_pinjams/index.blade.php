@extends('layouts.menu')

@section('title', ' Index Detail Pinjam ')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>INDEX Detail Pinjam</h2>
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
            <th>ID Peminjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Jumlah </th>
            <th>Status Peminjaman</th>
            <th>ID Pegawai</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($detail_pinjams as $a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->id }}</td>
            <td>{{ $a->id_inventaris }}</td>
            <td>{{ $a->id_peminjaman }}</td>
            <td>{{ $a->tanggal_pinjam }}</td>
            <td>{{ $a->tanggal_kembali }}</td>
            <td>{{ $a->jumlah }}</td>
            <td>{{ $a->status_peminjaman }}</td>
            <td>{{ $a->id_pegawai }}</td>
        
            
            <td>
                <form action="{{ route('detail_pinjams.destroy',$a->id) }}" method="POST">
   
                    
    
                   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $detail_pinjams->links() !!}
      
@endsection