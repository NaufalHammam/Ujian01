<?php

namespace App\Http\Controllers;

use App\Detail_pinjam;
use Illuminate\Http\Request;

class Detail_pinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_pinjams = Detail_pinjam::latest()->paginate(5);
  
        return view('detail_pinjams.index',compact('detail_pinjams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail_pinjam  $detail_pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_pinjam $detail_pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail_pinjam  $detail_pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_pinjam $detail_pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail_pinjam  $detail_pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_pinjam $detail_pinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail_pinjam  $detail_pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_pinjam $detail_pinjam)
    {
        //
    }
}
