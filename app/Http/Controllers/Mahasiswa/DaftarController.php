<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Instansi;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DaftarController extends Controller
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
        $id=Auth::user()->mahasiswa->id;
        $mahasiswa=Mahasiswa::find($id);
        // if($mahasiswa->instansi()->exists()){
        //     echo "Ada";
        // }
        // echo $mahasiswa->instansi()->first()->name;
        $instansi=Instansi::all();
        return view('mahasiswa.mhs_daftar')->with([
            'mahasiswa'=>$mahasiswa,
            'instansi'=>$instansi
            ]);
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
        // $x=$request->validate([
        //     'nim'=>'unique:mahasiswa,nim',
        // ]);
        // if(!$x){
        //     return redirect()->route('mahasiswa.daftar.edit',$id);
        // };

        $mahasiswa=Mahasiswa::find($id);
        $user=User::find($mahasiswa->user_id);
        
        //Update User
        $user->name=$request->name;
        $user->save();

        //Update Mahasiswa
        $mahasiswa->nim=$request->nim;
        $mahasiswa->tahun_masuk=$request->tahun_masuk;
        $mahasiswa->alamat=$request->alamat;
        $mahasiswa->Kontak_Person=$request->Kontak_Person;

        //Update/Create Instansi_mahasiswa
        if($request->instansi == 1){
            $instansi_id=$request->instansi_id;
        }else{
            $instansi_new=Instansi::create([
                'name'=>$request->nama_instansi,
                'alamat'=>$request->alamat_instansi,
                'Telp'=>$request->telp_instansi,
                'email'=>$request->email_instansi,
            ]);
            $instansi_id=$instansi_new->id;
        }
        $mahasiswa->instansi()->sync($instansi_id);
        $mahasiswa->instansi()->updateExistingPivot($instansi_id,
                ['divisi' => $request->divisi,
                'mulai'=>$request->mulai,
                'selesai'=>$request->selesai]);
        $mahasiswa->save();
        return redirect()->route('mahasiswa.daftar.edit',$id);
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
