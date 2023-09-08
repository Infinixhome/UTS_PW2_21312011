<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

use App\Models\Peran;
use App\Models\Genre;
use RealRashid\SweetAlert\Facades\Alert;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = Peran::all();
        return view('peran.index',compact('peran')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('peran.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran = new Peran();

        $request->validate([
            'film' => 'required',
            'cast' => 'required',
            'nama' => 'required',
            'poster' => 'required',
            'genre' => 'required'
        ]);

        $peran->judul = $request->judul;
        $peran->ringkasan = $request->ringkasan;
        $peran->tahun = $request->tahun;
        $peran->poster = $request->poster;
        $peran->genre_id = $request->genre;

        $simpan = $peran->save();

        if($simpan){
            Alert::success('Success', 'Data Berhasil ditambah');
            return redirect('/peran');
        }else{
            Alert::error('Failed', 'Data Gagal ditambah');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}