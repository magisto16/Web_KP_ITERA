<html>

<head>
    <title>Laporan Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        p {
            text-align: right;
        }

        .header {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h4>Laporan Nilai Kerja Praktik</h4>
        <h5>Program Studi Teknik Informatika Intitut Teknologi Sumatera</h5>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr class="active">
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @php ($i=1)
            @foreach($user as $row)
            @php ($nilaiAkhir=(0.6*$row->mahasiswa->seminar['nilai'])+(0.4*$row->mahasiswa->instansi()->first()->pivot->nilai))
            <tr>
                <td>{{$i}}</td>
                <td>{{$row->mahasiswa['nim']}}</td>
                <td>{{$row->name}}</td>
                <td>
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
            @php ($i+=1)
            @endforeach
        </tbody>
    </table>

    <p>Lampung Selatan, {{now()}} Mugi Praseptiawan</p>
</body>

</html>