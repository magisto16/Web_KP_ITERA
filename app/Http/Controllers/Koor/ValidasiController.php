<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValidasiController extends Controller
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
        /*$mahasiswa= DB::table('mahasiswa')
            ->join('users','users.id','=','mahasiswa.user_id')
            ->select('users.*','mahasiswa.*')
            ->whereNull('mahasiswa.dosen_id')
            ->orWhereNull('users.email_verified_at')
            ->get();
        */$mahasiswa=User::whereHas(
            'roles',function($q){
                $q->where('name','mahasiswa');
            }
        )->whereHas(
            'mahasiswa',function($q){
                $q->whereNull('selesai');
            }
        )->get();
        return view('koor.validasi.index')->with('result',$mahasiswa);
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
        $model = User::findOrFail($id);
        return view('koor.mahasiswa.koor_mhs_lihat', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('koor.validasi.koor_validasi_validasi',compact('user'));
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
        $user=User::findOrFail($id);
        $user->email_verified_at=now();
        $user->save();
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
