<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Laporan;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;

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
        $row=User::whereHas(
            'roles', function($q){
                $q->where('name', 'mahasiswa');
            }
        )->whereHas(
            'mahasiswa', function($q){
                $q->whereNull('selesai');
            }
        )->get();
        return view('koor.laporan.index', compact('row'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $user=User::findOrFail($id);
        $laporan=Laporan::where('mahasiswa_id',$user->mahasiswa->id)->first();
        if($laporan != NULL)
            return view('koor.laporan.koor_laporan_lihat',compact('laporan'));
        else
            return redirect()->route('koor.laporan.index');
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
