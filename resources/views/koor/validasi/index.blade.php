@extends('layouts.koor.koor_index')
@section('title') Validasi Mahasiswa @stop
@section('content')
<div class="col-9 col-s-12 content" id="validasiTable">
    <div class="panel panel-primary">
        <div class="panel-heading">Daftar Mahasiswa Validasi</div>
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
                            <th class="th-sm">Mahasiswa</th>
                            <th class="th-sm">Validasi</th>
                            <th class="th-sm">Assign</th>
                            <th class="th-sm">Lihat</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($result as $row)
                        <tr>
                            <td width="80%">{{$row->name}}</td>
                            <td>
                                @if($row->email_verified_at == NULL)
                                <a href="{{route('koor.validasi.edit',$row->id)}}" class="edit" fungsi="validasi" id="{{$row->id}}" title="Validasi Pendaftaran Mahasiswa">
                                    <button class="btn btn-info btn-xs">Validasi</button>
                                </a>
                                @else
                                <a href="#">
                                    <button class="btn btn-success btn-xs">Tervalidasi</button>
                                </a>
                                @endif
                            </td>
                            <td>
                                @if($row->mahasiswa->dosen_id == NULL)
                                <a href="{{route('koor.assign.edit',$row->id)}}" class="assign" fungsi="assign" id="{{$row->id}}" title="Assign Dosen Pembimbing">
                                    <button class="btn btn-info btn-xs">Assign</button>
                                </a>
                                @else
                                <a href="{{route('koor.assign.edit',$row->id)}}" class="assign" fungsi="ubah" id="{{$row->id}}" title="Assign Dosen Pembimbing">
                                    <button class="btn btn-success btn-xs">Ubah Dopem</button>
                                </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('koor.mahasiswa.show',$row->id)}}" class="view_data_lihat" id="{{$row->id}}" title="Detail Data Mahasiswa">
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