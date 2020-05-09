<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\seminar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeminarController extends Controller
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
        $mahasiswa=Mahasiswa::where('dosen_id',$dosen)
            ->whereHas(
                'seminar',function($q){
                    $q->whereNull('nilai')->orderBy('pelaksanaan','desc');
                })
            ->pluck('user_id')->toArray();
        $user=User::whereIn('id',$mahasiswa)->get();
        return view('dosen.seminar.dopem_seminar',compact('user'));
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
        $row=User::findOrFail($id);
        return view('dosen.seminar.dopem_seminar_lihat',compact('row'));
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
        $user=User::findOrFail($id);
        $seminar=seminar::findOrFail($user->mahasiswa->seminar->id);
        $seminar->disetujui=$request->seminar_acc;
        $seminar->catatan=$request->catatanSeminarIsi;
        $seminar->save();
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
