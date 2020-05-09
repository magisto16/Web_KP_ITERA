@extends('layouts.mahasiswa.mahasiswa_index')
@section('title') Upload Berkas @stop
@section('content')
<div class="col-9 col-s-9 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Unggah Berkas</div>
        <div class="panel-body">
            <div class="col-12 col-s-12 content_satu">
                <div class="col-3 col-s-12 nilai_akhir">
                    <p>Laporan Kerja Praktik</p>
                    <a data-toggle="modal" data-target="#uploadModal1">Unggah</a>
                </div>
            </div>

            <div class="col-12 col-s-12 content_satu">
                <div class="col-3 col-s-12 semester">
                    <p>Nilai Instansi</p>
                    <a data-toggle="modal" data-target="#uploadModal2">Unggah</a>
                </div>
            </div>

            <div class="col-12 col-s-12 content_satu">
                <div class="col-3 col-s-12 catatan">
                    <p>Log Sheet</p>
                    <a data-toggle="modal" data-target="#uploadModal3">Unggah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection