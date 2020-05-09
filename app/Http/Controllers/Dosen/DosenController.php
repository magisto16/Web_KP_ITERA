<?php

namespace App\Http\Controllers\Dosen;

use App\Catatan;
use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\seminar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
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
        $mahasiswa_id=$mahasiswa->pluck('id')->toArray();
        $user=User::whereIn('id',$mahasiswa->pluck('user_id'))->get();
        $seminar=seminar::whereIn('mahasiswa_id',$mahasiswa_id)->get();
        // dd($seminar);
        $data=[];
        $data['telahSeminar']=$seminar->whereNotNull('nilai')->count();//telahSeminar
        $data['akanSeminar']=$seminar->whereNull('nilai')->whereNotNull('pelaksanaan')->count();//akanSeminar
        $data['totalMahasiswa']=$mahasiswa->count();//totalMahasiswa
        $data['belumSeminar']=$data['totalMahasiswa']-$data['telahSeminar'];//belumSeminar
        return view('dosen.index',compact('data','user'));
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
        $row=User::findOrFail($request->userId);
        Catatan::create([
            'laporan_id'=>$row->mahasiswa->laporans->id,
            'catatan'=>$request->komen,
        ]);
        return redirect()->back();
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
