<?php

namespace App\Http\Controllers;

use App\User;
use App\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
  
        return view('admins.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $level = Level::all();
        return view('admins.edit',compact('user','level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        $request->validate([
            'nama_petugas' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'id_level' => 'required',
        ]);
        $update_user = User::where('id', $user->id)->update([
        //$user->update($request->all());
            'nama_petugas' => $request->nama_petugas,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'id_level' => $request->id_level,

        ]);
  
        return redirect()->route('users.index')
                        ->with('success','Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
  
        return redirect()->route('users.index')
                        ->with('success','Admin deleted successfully');
    }
}
