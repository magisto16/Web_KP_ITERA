<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Laporan;
use App\Mahasiswa;
use App\seminar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
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
        $mahasiswa=Mahasiswa::where('dosen_id',$dosen)->whereNull('selesai')->pluck('user_id')->toArray();
        $user=User::whereIn('id',$mahasiswa)->get();
        return view('dosen.nilai.dopem_nilai',compact('user'));
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('dosen.nilai.dopem_nilai_lihat',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa=Mahasiswa::findOrFail($id);
        $mahasiswa->laporans->disetujui=1;
        $mahasiswa->laporans->save();
        $mahasiswa->seminar->nilai=$request->nilai_seminar;
        $mahasiswa->seminar->save();
        $mahasiswa->save();
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
