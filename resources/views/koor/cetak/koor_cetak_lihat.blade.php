<div class="table-responsive">  
    <table class="table table-bordered">
        <tr>  
                <td width="30%"><label>Nama</label></td>  
                <td width="70%">{{$row->name}}</td>  
        </tr>  
        <tr>  
                <td width="30%"><label>NIM</label></td>  
                <td width="70%">{{$row->mahasiswa['nim']}}</td>  
        </tr>
        <tr>  
                <td width="30%"><label>Alamat</label></td>  
                <td width="70%">{{$row->mahasiswa['alamat']}}</td>  
        </tr>    
        <tr>  
                <td width="30%"><label>Kontak Person</label></td>  
                <td width="70%">{{$row->mahasiswa['Kontak_Person']}}</td>  
        </tr>  
        <tr>  
                <td width="30%"><label>Email</label></td>  
                <td width="70%">{{$row->email}}</td>  
        </tr> 
        <tr>  
                <td width="30%"><label>Laporan</label></td>  
                <td width="70%">{{$row->mahasiswa->seminar['name']}}</td>  
        </tr>
        <tr>  
                <td width="30%"><label>Seminar</label></td>  
                <td width="70%">{{$row->mahasiswa->seminar['pelaksanaan']}}</td>  
        </tr>
        <tr>  
                @php ($nilaiAkhir=(0.6*$row->mahasiswa->seminar['nilai'])+(0.4*$row->mahasiswa->instansi()->first()->pivot->nilai))
                <td width="30%"><label>Nilai</label></td>  
                <td width="70%">
                        @if($nilaiAkhir>=80)
                                @php ($huruf="A")
                        @elseif($nilaiAkhir>=70)
                                @php ($huruf="AB")
                        @elseif($nilaiAkhir>=60)
                                @php ($huruf="B")
                        @elseif($nilaiAkhir>=50)
                                @php ($huruf="BC")
                        @elseif($nilaiAkhir>=40)
                                @php ($huruf="C")
                        @elseif($nilaiAkhir>=30)
                                @php ($huruf="D")
                        @else
                                @php ($huruf="E")
                        @endif
                        {{$huruf}}
                </td>  
        </tr>
    </table>
</div>