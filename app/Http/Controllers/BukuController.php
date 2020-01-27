<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku=Buku::all();
        return view('buku.index',['buku'=>$buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku=new Buku();
        $buku->penulis=$request->get('penulis');
        $buku->judul=$request->get('judul');
        $buku->kota=$request->get('kota');
        $buku->penerbit=$request->get('penerbit');
        $buku->tahun=$request->get('tahun');
        $buku->save();
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku=Buku::find($id);
        return view('buku.edit',['buku'=>$buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku=Buku::find($id); 
        $buku->penulis=$request->get('penulis');
        $buku->judul=$request->get('judul');
        $buku->kota=$request->get('kota');
        $buku->penerbit=$request->get('penerbit');
        $buku->tahun=$request->get('tahun');
        $buku->save();
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku=Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
