<?php

namespace App\Http\Controllers;

use App\Inventori;
use App\Jenis;
use App\Ruang;
use App\User;
use Illuminate\Http\Request;

class InventoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventoris = Inventori::latest()->paginate(5);
  
        return view('inventoris.index',compact('inventoris'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        $ruang = Ruang::all();
        $user = User::all();
        return view('inventoris.create', compact('jenis', 'ruang', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'keterangan' => 'required',
            'tanggal_register' => 'required',
            'id_ruang' => 'required',
            'kode_inventori' => 'required',
            'id_petugas' => 'required',
        ]);
  
        Inventori::create($request->all());
   
        return redirect()->route('inventoris.index')
                        ->with('success','Ruang created successfully.');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventori  $inventori
     * @return \Illuminate\Http\Response
     */
    public function show(Inventori $inventori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventori  $inventori
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventori $inventori)
    {
        $jenis = Jenis::all();
        $ruang = Ruang::all();
        $user = User::all();
        return view('inventoris.edit',compact('inventori','jenis','ruang','user'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventori  $inventori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventori $inventori)
    {
        $request->validate([
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'keterangan' => 'required',
            'tanggal_register' => 'required',
            'id_ruang' => 'required',
            'kode_inventori' => 'required',
            'id_petugas' => 'required',
    ]);
        $inventori->update($request->all());
  
        return redirect()->route('inventoris.index')
                        ->with('success','Inventori updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventori  $inventori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventori $inventori)
    {
        //
    }
}
