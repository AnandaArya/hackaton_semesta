<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use Illuminate\Http\Request;

class PendaftarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendaftars = Pendaftar::paginate(5);
        return view('pendaftars/index', compact('pendaftars'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $pendaftars = Pendaftar::where('nama', 'LIKE', "%$search%")->orWhere('nik', 'LIKE', "%$search%")->orWhere('no_hp', 'LIKE', "%$search%")->paginate(5);
        return view('pendaftars/index', compact('pendaftars'));
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
        $gambarFile = $request->gambar;
        $namaFile = uniqid().".".$gambarFile->getClientOriginalExtension();

        $pendaftar = new pendaftar;
        $pendaftar->nama = $request->nama;
        $pendaftar->nik = $request->nik;
        $pendaftar->alamat = $request->alamat;
        $pendaftar->pekerjaan = $request->pekerjaan;
        $pendaftar->no_hp = $request->no_hp;
        $pendaftar->tgl_lahir = $request->tgl_lahir;
        $pendaftar->tgl_vaksin = $request->tgl_vaksin;
        $pendaftar->id_vaksin = '1';
        $pendaftar->status = 'proses';
        $pendaftar->gambar = $namaFile;

        // kita pindahkan file gambar ke folder public/img dengan diganti namanya $namaFile
        $gambarFile->move(public_path().'/img', $namaFile);
        $pendaftar->save();

        return redirect('/')->with('status', 'Anda berhasil mendaftar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftar $pendaftar)
    {
        return view('pendaftars/detail', compact('pendaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftar $pendaftar)
    {
        //
    }
}
