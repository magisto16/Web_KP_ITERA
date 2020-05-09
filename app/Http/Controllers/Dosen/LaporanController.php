<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Laporan;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen=Auth::user()->dosen->id;
        $mahasiswa=Mahasiswa::where('dosen_id',$dosen)->whereNull('selesai')->get();
        // $laporan=Laporan::whereIn('mahasiswa_id',$mahasiswa)->get();
        return view('dosen.laporan.dopem_laporan',compact('mahasiswa'));
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa=Mahasiswa::findOrFail($id);
        $laporan=Laporan::where('mahasiswa_id',$mahasiswa->id)->first();
        if($laporan != NULL)
            return view('dosen.laporan.dopem_laporan_lihat',compact('laporan'));
        else
            return redirect()->route('dosen.laporan.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
