@extends('layouts.mahasiswa.mahasiswa_index')
@section('title') Pengajuan Seminar @stop
@section('content')
<div class="col-9 col-s-9 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Pengajuan Seminar</div>
        <div class="panel-body">
            <form class="col-12 col-s-12 form" action="{{route('mahasiswa.seminar.update',$mahasiswa->id)}}" method="POST">
            @csrf
            {{method_field('PUT')}}
                <div class="form-group">
                    <label for="name">Nama Seminar:</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Seminar" @if($mahasiswa->seminar()->exists())value="{{$mahasiswa->seminar->name}}" @endif name="name" required>
                </div> 
                <div class="form-group">
                    <label for="tmpt">Tempat Kerja Praktik:</label>
                    <input type="text" class="form-control" id="instansi" placeholder="Null" @if($mahasiswa->instansi()->exists()) value="{{$mahasiswa->instansi()->first()->name}}"  disabled @endif name="instansi">
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu Kerja Praktik:</label>
                    <input type="text" class="form-control" id="waktu" placeholder="Null" @if($mahasiswa->instansi()->exists()) value="{{$mahasiswa->instansi()->first()->pivot->mulai}} s.d {{$mahasiswa->instansi()->first()->pivot->selesai}}" disabled @endif name="waktu">
                </div>
                <div class="form-group">
                    <label for="waktu_seminar">Waktu Seminar: (YYYY/MM/DD HH:MM)</label>
                    <input type="datetime-local" class="form-control" id="waktu_seminar" placeholder="YYYY/MM/DD HH:MM" value="@if($mahasiswa->seminar()->exists()){{$mahasiswa->seminar->pelaksanaan}}@endif" name="waktu_seminar" required>
                </div>
                <div class="form-group">
                    <label for="tempat_seminar">Tempat Seminar:</label>
                    <input type="text" class="form-control" id="tempat_seminar" placeholder="Masukkan Tempat Seminar"  value="@if($mahasiswa->seminar()->exists()){{$mahasiswa->seminar->lokasi}}@endif" name="tempat_seminar" required>
                </div>

                @if($mahasiswa->seminar['disetujui'] == 1)
                    <a href="#" type="button" class="btn btn-success">Terdaftar</a>
                @else
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    @if($mahasiswa->seminar()->exists())
                        @if($mahasiswa->seminar['disetujui'] === NULL)
                            Pengajuan sedang menunggu persetujuan
                        @elseif($mahasiswa->seminar['disetujui'] === 0)
                            Pengajuan Ditolak. Silahkan cek catatan dari dosen.
                        @endif
                    @endif
                @endif
            </form>
        </div>
    </div>
</div>
@endsection