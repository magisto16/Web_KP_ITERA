@extends('layouts.dosen.dosen_index')
@section('title') Daftar Mahasiswa @stop
@section('content')
<div class="col-9 col-s-12 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Daftar Mahasiswa</div>
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
                            <th class="th-sm" width="40%">Mahasiswa</th>
                            <th class="th-sm" width="25%">Nilai Instansi</th>
                            <th class="th-sm" width="25%">Nilai Seminar</th>
                            <th class="th-sm" width="10%">Lihat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
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
                                        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something" @if($row->mahasiswa->seminar()->first()['nilai'] != NULL)
                                        checked disabled
                                        @endif
                                        >
                                    </label>
                                    <a href="#">Lihat Laporan</a>
                                </div>
                            </td>
                            <td><a href="{{route('dosen.mahasiswa.show',$row->id)}}" type="button" fungsi="view" name="view" id="{{$row->name}}" class="btn btn-info btn-xs view_data_lihat">Lihat</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection