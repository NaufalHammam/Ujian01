<?php

namespace App\Http\Controllers;

use App\Jeni;
use Illuminate\Http\Request;

class JeniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jeni::latest()->paginate(5);
  
        return view('jenis.index',compact('jenis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis.create');
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
            
        ]);
  
        Jeni::create($request->all());
   
        return redirect()->route('jenis.index')
                        ->with('success','Jenis created successfully.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jeni  $jeni
     * @return \Illuminate\Http\Response
     */
    public function show(Jeni $jeni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jeni  $jeni
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeni $jeni)
    {
        return view('jenis.edit',compact('jeni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jeni  $jeni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jeni $jeni)
    {
        $request->validate([
            
        ]);
  
        $jeni->update($request->all());
  
        return redirect()->route('jenis.index')
                        ->with('success','Jenis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jeni  $jeni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeni $jeni)
    {
        $jeni->delete();
  
        return redirect()->route('jenis.index')
                        ->with('success','Jenis deleted successfully');
    }
}
