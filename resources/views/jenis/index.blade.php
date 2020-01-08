@extends('layouts.menu')

@section('title', ' Index jenis ')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>INDEX Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jenis.create') }}"> Create New Jenis</a>
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
            <th>ID</th>
            <th>Nama Jenis</th>
            <th>Kode Jenis</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jenis as $a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->id }}</td>
            <td>{{ $a->nama_jenis }}</td>
            <td>{{ $a->kode_jenis }}</td>
            <td>{{ $a->keterangan }}</td>
            
            <td>
                <form action="{{ route('jenis.destroy',$a->id) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('jenis.edit',$a->id) }}">Edit</a>
   

                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $jenis->links() !!}
      
@endsection