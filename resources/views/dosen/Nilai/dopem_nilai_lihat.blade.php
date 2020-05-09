<table class="table table-bordered">
    <tr>  
        <td width="30%"><label>Nama</label></td>  
        <td width="70%">{{$user->name}}</td>  
    </tr>  
    <tr>  
        <td width="30%"><label>Judul Laporan</label></td>  
        <td width="70%">
            @if($user->mahasiswa->seminar->name == NULL)
                {{$user->mahasiswa->laporans->name}}
            @else
                {{$user->mahasiswa->seminar->name}}
            @endif
        </td>  
    </tr>
    <tr>  
        <td width="30%"><label>Jadwal Seminar</label></td>  
        <td width="70%">{{$user->mahasiswa->seminar->pelaksanaan}}</td>  
    </tr>     
    <tr>  
        <td width="30%"><label>Email</label></td>  
        <td width="70%">{{$user->email}}</td>  
    </tr> 
    <tr>  
        <td width="30%"><label>Input Nilai</label></td>
        <td width="70%">
            <form action="{{route('dosen.nilai.update',$user->mahasiswa->id)}}" method="POST">
            @csrf
            {{method_field('PUT')}}
                <input type="text" id="nilai_seminar" name="nilai_seminar" min="0" max="100" class="form-control" value="{{$user->mahasiswa->seminar->nilai}}" required>
            </form>
        </td> 
    </tr> 
</table>
