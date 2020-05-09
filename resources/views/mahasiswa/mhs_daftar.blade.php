@extends('layouts.mahasiswa.mahasiswa_index')
@section('title') Daftar @stop
@section('content')
<div class="col-9 col-s-9 content">
    <div class="panel panel-primary">
        <div class="panel-heading">Form Pendaftaran Kerja Praktik</div>
        <div class="panel-body">

            <form class="col-12 col-s-12 form" action="{{route('mahasiswa.daftar.update',$mahasiswa->id)}}" method="POST">
            @csrf
            {{method_field('PUT')}}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" value="{{ Auth::user()->mahasiswa->nim }}" required>
                </div><div class="form-group">
                    <label for="tahun_masuk">Tahun Masuk (angkatan):</label>
                    <input type="text" class="form-control" id="tahun_masuk" placeholder="Masukkan tahun masuk (Angkatan)" name="tahun_masuk" value="{{ Auth::user()->mahasiswa->tahun_masuk }}" required>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan:</label>
                    <input type="text" disabled value="Jurusan Teknik Elektro, Informatika dan Sistem Fisika" class="form-control" id="jurusan" name="jurusan" required>
                </div>
                <div class="form-group">
                    <label for="prodi">Program Studi:</label>
                    <input type="text" disabled value="Teknik Informatika" class="form-control" id="prodi" name="prodi" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" 
                    @if(Auth::user()->mahasiswa->alamat != NULL)
                        value="{{Auth::user()->mahasiswa->alamat}}"
                    @else
                        value="" placeholder="Masukkan Alamat"
                    @endif
                    required>
                </div>
                <div class="form-group">
                    <label for="telp">No. Telepon:</label>
                    <input type="text" class="form-control" id="Kontak_Person" name="Kontak_Person" 
                    @if(Auth::user()->mahasiswa->Kontak_Person != NULL)
                        value="{{Auth::user()->mahasiswa->Kontak_Person}}"
                    @else
                        value="" placeholder="Masukkan No. Telepon"
                    @endif
                    required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" value="{{Auth::user()->email}}" disabled name="email" required>
                </div>
                <div class="form-group">
                    <label>Instansi:</label>
                    <select id='instansi' name="instansi" class="form-control" required>
                        <option value="">Pilih Metode</option>
                        <option value="1">Pilih Instansi yang Ada</option>
                        <option value="2">Tambahkan Instansi Baru</option>
                    </select>
                </div>
                <div class="form-group" id="nama_instansi" style='display:none'>
                    <label for="nama_instansi">Nama Insatnsi:</label>
                    <input type="text" class="form-control" id="nama_instansi" placeholder="Masukkan Nama Instansi" name="nama_instansi" >
                </div>
                <div class="form-group" id="alamat_instansi" style='display:none'>
                    <label for="alamat_instansi">Alamat Instansi:</label>
                    <input type="text" class="form-control" id="alamat_instansi" placeholder="Masukkan Alamat Instansi" name="alamat_instansi" >
                </div>
                <div class="form-group" id="email_instansi" style='display:none'>
                    <label for="nama_instansi">Email Insatnsi:</label>
                    <input type="email" class="form-control" id="email_instansi" placeholder="Masukkan Email Instansi" name="email_instansi">
                </div>
                <div class="form-group" id="telp_instansi" style='display:none'>
                    <label for="nama_instansi">No Telpon Insatnsi:</label>
                    <input type="text" class="form-control" id="telp_instansi" placeholder="Masukkan Nomor Telephone Instansi" name="telp_instansi" >
                </div>
                <div class="form-group" id="instansi_id" style='display:none'>
                    <label>Pilih Instansi: </label>
                    <select id="instansi_id" class="form-control" name="instansi_id" placeholder="Pilih tempat KP">
                        @foreach($instansi as $p)
                                <option value="{{$p->id}}" @if($mahasiswa->instansi()->get()->contains($p->id)) selected @endif >{{$p->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="divisi">Divisi Instansi:</label>
                    <input type="text" class="form-control" id="divisi" placeholder="Masukkan Divisi Instansi" value="@if($mahasiswa->instansi()->exists()) {{$mahasiswa->instansi()->first()->pivot->divisi}} @endif" name="divisi" required>
                </div>
                <div class="form-group">
                    <label for="waktu">Tangal Mulai Pelaksanaan :</label>
                    <input type="date" min="{{date('Y-M-d')}}"class="form-control" id="mulai" placeholder="Masukkan Tanggal Mulai Pelaksanaan" @if($mahasiswa->instansi()->exists()) value="{{$mahasiswa->instansi()->first()->pivot->mulai}}" @endif name="mulai" required>
                </div>
                <div class="form-group">
                    <label for="waktu">Tanggal Selesai Pelaksanaan :</label>
                    <input type="date" class="form-control" id="selesai" placeholder="Masukkan Tanggal Selesai Pelaksanaan" @if($mahasiswa->instansi()->exists()) value="{{$mahasiswa->instansi()->first()->pivot->selesai}}"@endif name="selesai" required>
                </div>
                @if(!$mahasiswa->instansi()->exists() || $mahasiswa->instansi()->first()->pivot->selesai == NULL)
                    <button type="submit" class="btn btn-primary">Daftar</button>
                @else
                    <button type="" class="btn btn-success">Terdaftar</button>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection