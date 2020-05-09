<?php

namespace App\Http\Controllers\koor;

use App\Dosen;
use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;

class AssignController extends Controller
{
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
        $user = User::findOrFail($id);
        if($user->mahasiswa->dosen_id != NULL){
            $dopem=Dosen::findOrFail($user->mahasiswa->dosen_id);
            $pembimbing = User::findOrFail($dopem->user_id);
        }else $pembimbing = User::findOrFail(1);
        $dopem = User::whereHas(
            'roles',function($q){
                $q->where('name','dosen pembimbing');
            })->whereHas(
            'dosen',function($q){
                $q->whereHas('mahasiswa',function($r){
                    $r->whereNull('selesai');
                },'<',8);
            }
        )->get();
        return view('koor.validasi.koor_validasi_assign',compact('pembimbing','user','dopem'));
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
        $user=Mahasiswa::findOrFail($id);
        $user->dosen_id=$request->dosen_id;
        $user->save();
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
