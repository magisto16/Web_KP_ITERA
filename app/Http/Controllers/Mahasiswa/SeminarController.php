<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\seminar;
use App\User;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified']);;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $mahasiswa=Mahasiswa::findOrFail($id);
        $user=User::findOrFail($mahasiswa->user_id);
        return view('mahasiswa.mhs_pengajuan',compact('user','mahasiswa'));
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
        $mahasiswa=Mahasiswa::find($id);
        if(!$mahasiswa->instansi()->exists() || !$mahasiswa->laporans()->exists()){
            return "Lengkapi Laporan Terlebih dahulu";
        }
        if($mahasiswa->seminar()->exists()){
            $mahasiswa->seminar->update([
                'name'=>$request->name,
                'pelaksanaan'=>$request->waktu_seminar,
                'lokasi'=>$request->tempat_seminar,
                'disetujui'=>NULL,
            ]);
            return redirect()->route('mahasiswa.seminar.edit',$id);
        }else{
            $seminar= new seminar(array(
                'name'=>$request->name,
                'pelaksanaan'=>$request->waktu_seminar,
                'lokasi'=>$request->tempat_seminar,
                'disetujui'=>NULL,
            ));
            $seminar->mahasiswa()->associate($mahasiswa);
            $seminar->save();
            return redirect()->route('mahasiswa.seminar.edit',$id);
        }
        
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
