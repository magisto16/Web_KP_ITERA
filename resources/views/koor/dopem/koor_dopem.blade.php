@extends('layouts.koor.koor_index')
@section('title') Daftar Dosen Pembimbing @stop
@section('content')
<div class="col-9 col-s-12 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Daftar Dosen Pembimbing</div>
        <div class="panel-body">
            <!-- Actual search box -->
            <!-- <div class="form-group has-feedback has-search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Cari">
            </div> -->

            <div class="table-responsive">
                <table id="datatables" class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th class="th-sm" width="90%">Nama</th>
                            <th class="th-sm" width="10%">Lihat</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($result as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>
                                <a href="{{route('koor.dopem.show',$row->id)}}" class="modal-show" id="{{$row->name}}" title="Data Dosen Pembimbing">
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