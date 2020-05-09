@extends('layouts.dosen.dosen_index')
@section('title') Laporan @stop
@section('content')
<div class="col-9 col-s-12 content" id="content1">

    <div class="panel panel-primary">
        <div class="panel-heading">Daftar Laporan</div>
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
                            <th class="th-sm" width="90%">Judul Laporan</th>
                            <th class="th-sm" width="10%">Lihat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $row)
                        @if($row->laporans()->exists())
                        <tr>
                            <td>@if($row->seminar['name'] == NULL)
                                {{$row->laporans['name']}}
                                @else
                                {{$row->seminar['name']}}
                                @endif
                            </td>
                            <td><a href="{{route('dosen.laporan.show', $row->id )}}" type="button" name="view" value="Lihat" id="$row->id" class="btn btn-info btn-xs">Lihat</a></td>
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