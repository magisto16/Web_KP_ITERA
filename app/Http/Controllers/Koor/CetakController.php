<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class CetakController extends Controller
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
        $mahasiswa=Mahasiswa::whereNotNull('selesai')
        ->pluck('user_id');
        $user=User::whereIn('id',$mahasiswa)->get();
        return view('koor.cetak.index',compact('user'));
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
        if($id>0){
            $row=User::findOrFail($id);
            return view('koor.cetak.koor_cetak_lihat', compact('row'));
        }else{
            $mahasiswa=Mahasiswa::whereHas(
                'seminar', function($q){
                    $q->whereNotNull('nilai');
                }
            )->whereNotNull('selesai')
            ->pluck('user_id');
            $user=User::whereIn('id',$mahasiswa)->get();
            $pdf=PDF::loadView('koor.cetak.koor_cetak_rekap',compact('user'));

            return $pdf->download('Rekap-Nilai-KP-IF.pdf');
        }
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
