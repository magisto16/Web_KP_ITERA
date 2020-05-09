<table class="table table-bordered">
    <tr>
        <td width="30%"><label>Nama</label></td>
        <td width="70%">: {{$model->name}}</td>
    </tr>
    <tr>
        <td width="30%"><label>Nilai Instansi</label></td>
        <td width="70%">: {{$model->mahasiswa->instansi()->first()['pivot']['nilai']}}</td>
    </tr>
    <tr>
        <td width="30%"><label>Nilai Seminar</label></td>
        <td width="70%">: {{$model->mahasiswa->seminar()->first()['nilai']}}</td>
    </tr>
    <tr>
        <td width="30%"><label>Nilai Akhir</label></td>
        <td width="70%">: {{$huruf}}</td>
    </tr>
</table>
<form action="{{route('koor.mahasiswa.update',$model->mahasiswa->id)}}" method="POST">
    @csrf
    {{method_field('PUT')}}
    <input id="verified" type="datetime-local"  user="{{$model->mahasiswa->id}}"name="verified" value={{now()}} hidden/>
    <p>Apakah anda yakin ingin melakukan validasi? Proses ini tidak bisa dibatalkan.</p>
</form>