@extends('layouts.koor.koor_index')
@section('title') Beranda @stop
@section('content')
<div class="col-9 col-s-12 content">

    <div class="panel panel-primary">
        <div class="panel-heading">Keterangan Mahasiswa</div>
        <div class="panel-body">
            <div class="col-12 col-12 content_satu">
                <div class="col-3 col-s-12 semester">
                    <p>Jumlah Mahasiswa Telah Kerja Praktik</p>
                    <h2>{{$sudah_kp}}</h2>
                </div>

                <div class="col-3 col-s-12 catatan">
                    <p>Jumlah Mahasiswa Belum Kerja Praktik</p>
                    <h2>{{$belum_kp}}</h2>
                </div>
            </div>


            <div class="col-12 col-s-12 content_dua">
                <div class="col-3 col-s-12 semester">
                    <p>Jumlah Mahasiswa Telah Seminar</p>
                    <h2>{{$sudah_seminar}}</h2>
                </div>

                <div class="col-3 col-s-12 catatan">
                    <p>Jumlah Mahasiswa Akan Seminar</p>
                    <h2>{{$akan_seminar}}</h2>
                </div>
            </div>

            <div class="col-12 col-s-12 content_tiga">
                <div class="col-3 col-s-12 semester">
                    <p>Jumlah Mahasiswa Belum Seminar</p>
                    <h2>{{$belum_seminar}}</h2>
                </div>

                <!-- <div class="col-3 col-s-12 catatan">
                    <p>Jumlah Mahasiswa Belum Kerja Praktik</p>
                    <h2>200</h2>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection