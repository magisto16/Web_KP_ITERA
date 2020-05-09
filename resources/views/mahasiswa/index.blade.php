@extends('layouts.mahasiswa.mahasiswa_index')
@section('title') Beranda @stop
@section('content')
<div class="col-9 col-s-12 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Keterangan Mahasiswa</div>
        <div class="panel-body">
            <div class="col-9 col-12 content_satu">
                <div class="col-3 col-s-12 semester">
                    <p>Semester</p>
                    <h2>
                        @if($user->email_verified_at != NULL && $user->mahasiswa->tahun_masuk !=NULL)
                            @if(date('n')<'7')
                                {{(date('Y')-$user->mahasiswa->tahun_masuk)*2}}
                            @else
                                {{(date('Y')-$user->mahasiswa->tahun_masuk)*2+1}}
                            @endif
                        @else
                            NULL
                        @endif
                    </h2>
                </div>

                <div class="col-3 col-s-12 catatan">
                    <p>Status Kerja Praktik</p>
                    <h2>
                        @if($user->mahasiswa->selesai == NULL)
                            Aktif
                        @else
                            Selesai
                        @endif
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Catatan Dosen</div>
        <div class="pemisah">
            <div class="panel-body">
            @if($user->mahasiswa->laporans != NULL)
                @if($user->mahasiswa->laporans->catatans != NULL)
                    @foreach($user->mahasiswa->laporans->catatans as $Catatan)
                        <p>{{$Catatan->catatan}}</p>
                    @endforeach
                @endif
            @endif
            @if($user->mahasiswa->seminar != NULL)
                @if($user->mahasiswa->seminar->catatan != NULL)
                    <p>{{$user->mahasiswa->seminar->catatan}}</p>
                @endif
            @endif
            </div>
        </div>
    </div>
</div>
@endsection