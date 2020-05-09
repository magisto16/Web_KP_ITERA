@extends('layouts.dosen.dosen_index')
@section('title') Daftar Nilai @stop
@section('content')
<div class="col-9 col-s-12 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Daftar Nilai</div>
        <div class="panel-body">
            <!-- Actual search box -->
            <!-- <div class="form-group has-feedback has-search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Search">
            </div> -->
            <div class="table-responsive">
                <table id="datatables" class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr class="active">
                            <th class="th-sm" width="40%">Nama</th>
                            <th class="th-sm" width="50%">Judul Laporan</th>
                            <th class="th-sm" width="10%">Lainnya</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
                        @if($row->mahasiswa->laporans()->exists() && $row->mahasiswa->selesai != 1)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>@if($row->mahasiswa->seminar['name'] == NULL)
                                {{$row->mahasiswa->laporans['name']}}
                                @else
                                {{$row->mahasiswa->seminar['name']}}
                                @endif
                            </td>
                            <td><a href="{{route('dosen.nilai.edit',$row->id)}}" type="button" name="view" fungsi="submit" id="{{$row->id}}" class="btn btn-info btn-xs view_data_lihat">Input</a></td>
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