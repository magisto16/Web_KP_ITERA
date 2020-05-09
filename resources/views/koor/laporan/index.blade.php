@extends('layouts.koor.koor_index')
@section('title') Daftar Laporan Mahasiswa @stop
@section('content')

<div class="col-9 col-s-12 content" id="content1">
    <div class="panel panel-primary">
        <div class="panel-heading">Daftar Laporan</div>
        <div class="panel-body">
            <!-- Actual search box -->
            <!-- <div class="form-group has-feedback has-search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Cari">
            </div> -->

            <div class="table-responsive">
                <table id="datatables" class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr class="active">
                            <th class="th-sm" width="30%">Nama</th>
                            <th class="th-sm" width="30%">Judul Laporan</th>
                            <th class="th-sm" width="30%">Jadwal Seminar</th>
                            <th class="th-sm" width="10%">Lihat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($row as $R)
                        @if($R->mahasiswa->laporans()->exists())
                        <tr>
                            <td>{{$R->name}}</td>
                            <td>@if($R->mahasiswa->seminar['name'] == NULL)
                                {{$R->mahasiswa->laporans['name']}}
                                @else
                                {{$R->mahasiswa->seminar['name']}}
                                @endif</td>
                            @if($R->mahasiswa->seminar['pelaksanaan'] !=NULL )
                            <td>{{$R->mahasiswa->seminar['pelaksanaan']}}</td>
                            @else
                            <td>Belum ditentukan</td>
                            @endif
                            <td><a href="{{route('koor.laporan.show', $R->id )}}" type="button" class="btn btn-info btn-xs">Lihat<a></td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection