<?php

namespace App\Http\Controllers\koor;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user=User::whereNotNull('email_verified_at')
        ->whereHas(
            'roles',function($q){
                $q->where('name','mahasiswa');
            })
        ->get();
        return view('koor.mahasiswa.koor_mhs',compact('user'));
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
        //$model = Mahasiswa::findOrFail($id);
        // $model = DB::table('mahasiswa')
        //     ->where('mahasiswa.id',$id)
        //     ->join('users','users.id','=','mahasiswa.user_id')
        //     ->select('users.*','mahasiswa.*')
        //     ->get()->first();
        $model=User::findOrFail($id);
        return view('koor.mahasiswa.koor_mhs_lihat', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model=User::findOrFail($id);
        $Nilai1 = $model->mahasiswa->instansi()->first()['pivot']['nilai'];
        $Nilai2 = $model->mahasiswa->seminar()->first()['nilai'];
        $nilaiAkhir= ($Nilai1*0.4)+($Nilai2*0.6);
        $huruf="T";
        if($Nilai1 == NULL || $Nilai2 == NULL);
        else if($nilaiAkhir>=80)
            $huruf="A";
        else if($nilaiAkhir>=70)
            $huruf="AB";
        else if($nilaiAkhir>=60)
            $huruf="B";
        else if($nilaiAkhir>=50)
            $huruf="BC";
        else if($nilaiAkhir>=40)
            $huruf="C";
        else if($nilaiAkhir>=30)
            $huruf="D";
        else
            $huruf="E";
        return view('koor.mahasiswa.koor_mhs_validasi', compact('model','huruf'));
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
        $mahasiswa->selesai=now();
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
