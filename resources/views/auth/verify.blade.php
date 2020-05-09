@extends('layouts.app')
@section('title') Verifikasi @stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Akunmu belum divalidasi oleh Koordinator KP') }}</div>
                <div class="card-body">
                    {{ __('Silahkan temui koordinator KP dengan membawa dokument berikut :') }}
                    <br>
                    {{ __('1. form pendaftaran') }},
                    <br>
                    {{ __('2. form persetujuan yang telah ditandatangi dosen wali') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
