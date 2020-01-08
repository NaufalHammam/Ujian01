@extends('layouts.menu')

@section('title', ' Index Petugas ')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Index Petugas </h2>
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
            <th>Nama </th>
            <th>email</th>
            <th>username</th>
            <th>Password</th>
            <th>ID Level</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->nama_petugas }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->id_level }}</td>
            <td>
                <?php 
                    if($user->nama_petugas== Auth::user()->nama_petugas ){
                ?>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                </form>
        <?php
        }else{
            ?>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            <?php
        }
        ?>

            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $users->links() !!}
      
@endsection