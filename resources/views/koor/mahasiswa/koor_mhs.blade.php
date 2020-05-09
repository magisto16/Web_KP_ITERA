@extends('layouts.koor.koor_index')
@section('title') Daftar Mahasiswa @stop
@section('content')

<div class="col-9 col-s-12 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Daftar Mahasiswa</div>
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
                            <th class="th-sm" width="30%">Mahasiswa</th>
                            <th class="th-sm" width="25%">Nilai Instansi</th>
                            <th class="th-sm" width="25%">Nilai Seminar</th>
                            <th class="th-sm" width="10%">Validasi</th>
                            <th class="th-sm" width="10%">Lihat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" @if($row->mahasiswa->instansi()->first()['pivot']['nilai'] != NULL)
                                        checked disabled
                                        @endif
                                        >
                                    </label>
                                    <a href="#">Lihat Laporan</a>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="check2">
                                        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something" @if($row->mahasiswa->seminar['nilai'] != NULL) checked disabled @endif >
                                    </label>
                                    <a href="#">Lihat Laporan</a>
                                </div>
                            </td>
                            <td>
                                @if($row->mahasiswa->selesai == NULL)
                                <a href="{{route('koor.mahasiswa.edit',$row->id)}}" class="edit" id="{{$row->id}}" title="Validasi Nilai">
                                    <button class="btn btn-info btn-xs">Validasi</button>
                                </a>
                                @else
                                <a href="#">
                                    <button class="btn btn-success btn-xs">Tervalidasi</button>
                                </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('koor.mahasiswa.show',$row->id)}}" class="view_data_lihat" id="{{$row->id}}" title="Data Mahasiswa">
                                    <button class="btn btn-info btn-xs">Lihat</button>
                                </a>
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