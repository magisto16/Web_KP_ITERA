<table class="table table-bordered">
        <tr>  
                <td width="30%"><label>Nama</label></td>  
                <td width="70%">{{$row->name}}</td>  
        </tr>  
        <tr>  
                <td width="30%"><label>Judul Laporan</label></td>  
                <td width="70%">{{$row->mahasiswa->seminar->name}}</td>  
        </tr>  
        <tr>  
                <td width="30%"><label>Jadwal Seminar</label></td>  
                <td width="70%">{{$row->mahasiswa->seminar->pelaksanaan}}</td>  
        </tr>
        <tr>  
                <td width="30%"><label>Ruangan</label></td>  
                <td width="70%">{{$row->mahasiswa->seminar->lokasi}}</td>  
        </tr>
        <tr>  
                <td width="30%"><label>Pilihan Anda ?</label></td>  
                <td width="70%">
                <form action="{{route('dosen.seminar.update',$row->id)}}" method="POST">
                @csrf
                {{method_field('PUT')}}
                        <div class="form-group">
                        <select id='seminar_acc' name="seminar_acc" class="form-control" required>
                                <option value="">Pilih salah satu</option>
                                <option value="1">Setuju</option>
                                <option value="0">Ajukan Jadwal Lain</option>
                        </select>
                        </div>
                        <div class="form-group" id="seminarCatatanLabel">
                                <input type="text" name="catatanSeminarIsi" class="form-control"placeholder="Berikan catatan untuk seminar mahasiswa ini"></input>
                        </div>
                </form>
                </td>  
        </tr>
</table>
