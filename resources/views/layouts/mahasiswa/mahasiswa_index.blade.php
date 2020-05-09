<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Mahasiswa</title>
    <link rel="stylesheet" href="{{asset('css/mahasiswa/home_page.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/mahasiswa/mhs_daftar.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/mahasiswa/mhs_pengajuan.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/mahasiswa/mhs_referensi.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/mahasiswa/mhs_unduh.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/mahasiswa/mhs_upload.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="header">
        <div class="col-1 col-ss-3 logo">
            <img src="{{ asset('/requirement/logo_itera.png') }}">
        </div>
        <div class="sub">
            <small>INSTITUT TEKNOLOGI</small>
            <br>
            <strong>SUMATERA</strong>
        </div>
    </div>

    <div class="nav-bar">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MAHASISWA</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('home') }}">
                                <button style="background: none; border: none;">
                                    <span class="glyphicon glyphicon-user"></span> {{Auth::user()->name }}
                                </button>
                            </a>
                        </li>
                        <li><a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button style="background: none; border: none;" type="submit">
                                        <span class="glyphicon glyphicon-log-out"></span> Keluar
                                    </button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-3 col-s-12 menu">
            <div class="list-group">
                <a class="list-group-item active">Menu Utama</a>
                <a href="{{route('mahasiswa.index')}}" class="list-group-item">Beranda</a>
                <a href="{{route('mahasiswa.daftar.edit',Auth::user()->mahasiswa->id)}}" class="list-group-item">Daftar</a>
                <a href="{{route('mahasiswa.referensi.index')}}" class="list-group-item">Referensi</a>
                <a href="{{route('mahasiswa.unduh.index')}}" class="list-group-item">Unduh Berkas</a>
                <a href="{{route('mahasiswa.upload.index')}}" class="list-group-item">Unggah Berkas</a>
                <a href="{{route('mahasiswa.seminar.edit',Auth::user()->mahasiswa->id)}}" class="list-group-item">Pengajuan Seminar</a>

            </div>
        </div>
        @yield('content')
    </div>
    <div class="footer">
        <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright</p>
    </div>

</body>

</html>

<!-- Modal UPLOAD 1 -->
<div id="uploadModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Unggah Laporan Kerja Praktik</h4>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <form method='POST' action="{{route('mahasiswa.upload.update',Auth::user()->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <input type='number' name="jenis" id="jenis" value="1" hidden>
                    <input type='file' name='file' id='file' class='form-control'required><br>
                    <input type='submit' class='btn btn-primary' value='Unggah' id='btn_upload'>
                </form>

                <!-- Preview-->
                <div id='preview'></div>
            </div>

        </div>

    </div>
</div>

<!-- Modal UPLOAD 2 -->
<div id="uploadModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Unggah Nilai Instansi</h4>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <form method='POST' action="{{route('mahasiswa.upload.update',Auth::user()->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <input type='number' name="jenis" id="jenis" value="2" hidden>
                    <label for="nilai">Masukkan Nilai</label>
                    <input type='number' name='nilai' id='nilai' placeholder="Masukkan nilai sesuai dengan file yang diberikan Jika berbeda maka nilai instansi dianggap 0" class='form-control' required><br>
                    <input type='file' name='file' id='file' class='form-control'required><br>
                    <input type='submit' class='btn btn-primary' value='Unggah' id='btn_upload'>
                </form>

                <!-- Preview-->
                <div id='preview'></div>
            </div>

        </div>

    </div>
</div>

<!-- Modal UPLOAD 3 -->
<div id="uploadModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Unggah Log Sheet</h4>
            </div>
            <div class="modal-body">
                <!-- Form -->
                <form method='POST' action="{{route('mahasiswa.upload.update',Auth::user()->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <input type='number' name="jenis" id="jenis" value="3" hidden>
                    <input type='file' name='file' id='file' class='form-control'required><br>
                    <input type='submit' class='btn btn-primary' value='Unggah' id='btn_upload'>
                </form>

                <!-- Preview-->
                <div id='preview'></div>
            </div>

        </div>

    </div>
</div>

<script>
    // script pagination
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });

    // MODAL UPLOAD
    $(document).ready(function() {
        $('#btn_upload').click(function() {

            var fd = new FormData();
            var files = $('#file')[0].files[0];
            fd.append('file', files);

            // AJAX request
            $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 0) {
                        // Show image preview
                        $('#preview').append("<img src='" + response + "' width='100' height='100' style='display: inline-block;'>");
                    } else {
                        alert('file not uploaded');
                    }
                }
            });
        });
    });

    $(document).ready(function() {
        $('#instansi').on('change', function() {
            if (this.value == '1') {
                $("#nama_instansi").hide();
                $("#alamat_instansi").hide();
                $("#email_instansi").hide();
                $("#telp_instansi").hide();
                $("#instansi_id").show();
            } else if (this.value == '2') {
                $("#nama_instansi").show();
                $("#alamat_instansi").show();
                $("#email_instansi").show();
                $("#telp_instansi").show();
                $("#instansi_id").hide();
            }
        });
    });
</script>