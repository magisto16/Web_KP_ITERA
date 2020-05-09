@extends('layouts.dosen.dosen_index')
@section('title') Beranda @stop
@section('content')
<div class="col-9 col-s-12 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Keterangan Mahasiswa</div>
        <div class="panel-body">
            <div class="col-12 col-12 content_satu">
                <div class="col-3 col-s-12 semester">
                    <p>Jumlah Mahasiswa Telah Seminar</p>
                    <h2>{{$data['telahSeminar']}}</h2>
                </div>

                <div class="col-3 col-s-12 catatan">
                    <p>Jumlah Mahasiswa Belum Seminar</p>
                    <h2>{{$data['belumSeminar']}}</h2>
                </div>
            </div>


            <div class="col-12 col-s-12 content_dua">
                <div class="col-3 col-s-12 semester">
                    <p>Jumlah Mahasiswa Akan Seminar</p>
                    <h2>{{$data['akanSeminar']}}</h2>
                </div>

                <div class="col-3 col-s-12 catatan">
                    <p>Jumlah Mahasiswa Kerja Praktik</p>
                    <h2>{{$data['totalMahasiswa']}}</h2>
                </div>
            </div>
        </div>
    </div>
    <form action="{{route('dosen.store')}}" method="POST">
    @csrf
    {{method_field('POST')}}
    <div class="panel panel-primary">

        <div class="panel-heading">
            <div class="h-separated">
                <div class="dropdown">
                    <select name="userId"class="btn btn-success dropdown-toggle" required>
                        <ul class="dropdown-menu">
                        <option value="" hidden>Catatan Untuk Mahasiswa</option>
                        @foreach($user as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                        </ul>
                    </select>
                </div>
                <div>Catatan Dosen</div>
            </div>
        </div>


        <div class="separated">
            <div class="panel-body">
            @foreach($user as $row)
                {{$row->name}}</br>
                @if($row->mahasiswa->laporans()->exists())
                    @foreach($row->mahasiswa->laporans->catatans as $catatan)
                    <p>
                        {{$catatan->catatan}}
                    </p>
                    @endforeach
                @endif
            @endforeach
            </div>
        </div>

        <div class="panel-footer">
                <div class="form-group">
                    <input type="text" class="form-control" id="komen" name="komen" placeholder="Ketik Disini" required>
                </div>
                <button type="submit" class="btn btn-primary">Komentar</button>
        </div>
    </div>
    </form>
</div>
@endsection