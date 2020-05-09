@extends('layouts.koor.koor_index')

@section('content')
<div class="col-9 col-s-12 content" id="content1">
    <div class="panel panel-primary">
        <div class="panel-heading">Laporan</div>
        <div class="panel-body">
            <a href="{{route('koor.laporan.index')}}" type="button" class="btn btn-primary">Back</a>
            <br>
            <br>
            <iframe src="{{URL::to('/laporan')}}/{{$laporan->name}}" width='100%' height='500px'></iframe>
        </div>
    </div>
</div>
@endsection