@extends('layouts.dosen.dosen_index')
@section('title') Jadwal Seminar @stop
@section('content')

<div class="col-9 col-s-12 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Daftar Jadwal Seminar</div>
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
                            <th class="th-sm" width="35%">Nama</th>
                            <th class="th-sm" width="30%">Jadwal Seminar</th>
                            <th class="th-sm" width="20%">Ruangan</th>
                            <th class="th-sm" width="15%">Lihat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->mahasiswa->seminar['pelaksanaan']}}</td>
                            <td>{{$row->mahasiswa->seminar['lokasi']}}</td>
                            <td>
                                @if($row->mahasiswa->seminar->disetujui != 1)
                                <a href="{{route('dosen.seminar.edit',$row->id)}}" type="button" name="view" fungsi="submit" id="{{$row->seminar['id']}}" class="btn btn-info btn-xs view_data_lihat">Response</a>
                                @else
                                <a href="#" type="button" class="btn btn-success btn-xs">Disetujui</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection