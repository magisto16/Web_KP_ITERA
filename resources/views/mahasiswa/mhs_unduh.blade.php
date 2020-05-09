@extends('layouts.mahasiswa.mahasiswa_index')
@section('title') Unduh Berkas @stop
@section('content')
<div class="col-9 col-s-9 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Unduh Berkas</div>
        <div class="panel-body">

            <div class="col-12 col-s-12 content_satu">
                <div class="col-3 col-s-12 nilai_akhir">
                    <p>Penilaian Instansi</p>
                    <a href="{{ asset('/requirement/KP3-Form-Penilaian-Instansi-KP-REV.docx') }}">Unduh</a>
                </div>
            </div>

            <div class="col-12 col-s-12 content_satu">
                <div class="col-3 col-s-12 semester">
                    <p>Seminar</p>
                    <a href="{{ asset('/requirement/KP4-Form-Pendaftaran-Seminar-KP-IF-REV.docx') }}">Unduh</a>
                </div>
            </div>

            <div class="col-12 col-s-12 content_satu">
                <div class="col-3 col-s-12 catatan">
                    <p>Presensi</p>
                    <a href="{{ asset('/requirement/KP2-Form-Presensi-dan-Log-Sheet-KP-IF-REV-40.docx') }}">Unduh</a>
                </div>
            </div>

            <div class="col-12 col-s-12 content_satu">
                <div class="col-3 col-s-12 semester">
                    <p>Ceklis Kelengkapan</p>
                    <a href="{{ asset('/requirement/C1-Ceklis-Kelengkapan-Seminar-Kerja-Praktik.docx') }}">Unduh</a>
                </div>
            </div>

            <div class="col-12 col-s-12 content_satu">
                <div class="col-3 col-s-12 catatan">
                    <p>Log Sheet</p>
                    <a href="{{ asset('/requirement/KP2-Form-Presensi-dan-Log-Sheet-KP-IF-REV-40.docx') }}">Unduh</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection