<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Koordinator</title>
    <link rel="stylesheet" href="{{asset('css/koor/home_page.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/koor/koor_dopem.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/koor/koor_cetak.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/koor/koor_laporan.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/koor/koor_mhs.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/koor/koor_validasi.css')}}" type="text/css">
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

    <div class=" header">
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
                    <a class="navbar-brand" href="#">KOORDINATOR</a>
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
                        <li>
                            <a>
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
                <a href="{{route('koor.index')}}" class="list-group-item">Beranda</a>
                <a href="{{route('koor.mahasiswa.index')}}" class="list-group-item">Mahasiswa</a>
                <a href="{{route('koor.laporan.index')}}" class="list-group-item">Laporan</a>
                <a href="{{route('koor.cetak.index')}}" class="list-group-item">Cetak Nilai</a>
                <a href="{{route('koor.validasi.index')}}" class="list-group-item">Validasi</a>
                <a href="{{route('koor.dopem.index')}}" class="list-group-item">Dosen Pembimbing</a>
            </div>
        </div>
        @yield('content')
    </div>
</body>
<div class="footer">
    <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright</p>
</div>

</html>
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="modal-title">Dopem</h4>
            </div>
            <div class="modal-body" id="employee_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div id="validasiModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="validasi-title">Apakah Anda Yakin?</h4>
            </div>
            <div class="modal-body" id="validasi_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary" id="modal-btn-validasi">Validasi</button>
            </div>
        </div>
    </div>
</div>

<div id="assignModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Data Mahasiswa</h4>
            </div>
            <div class="modal-body" id="assign_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary" id="modal-btn-save">Assign</button>
            </div>
        </div>
    </div>
</div>


<script>
    // script pagination
    $(document).ready(function() {
        $('#datatables').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });

    //Koor Dosen Pembimbing
    $(document).ready(function() {
        $('body').on('click', '.modal-show', function(event) {
            event.preventDefault();
            var me = $(this),
                employee_id = me.attr("id"),
                url = me.attr('href'),
                title = me.attr('title');
            $('#modal-title').text(title);
            $.ajax({
                url: url,
                data: {
                    employee_id: employee_id
                },
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
    });

    //Koor Mahasiswa
    $(document).ready(function() {
        $('body').on('click', '.view_data_lihat', function(event) {
            event.preventDefault();
            var me = $(this),
                employee_id = me.attr("id"),
                url = me.attr('href'),
                title = me.attr('title');
            $('#modal-title').text(title);
            $.ajax({
                url: url,
                data: {
                    employee_id: employee_id
                },
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
    });
    //Koor editValidasi
    $(document).ready(function() {
        $('body').on('click', '.edit', function(event) {
            event.preventDefault();
            var me = $(this),
                employee_id = me.attr("id"),
                url = me.attr('href'),
                title = me.attr('title');
            $('#validasi-title').text(title);
            $.ajax({
                url: url,
                data: {
                    employee_id: employee_id
                },
                success: function(data) {
                    $('#validasi_detail').html(data);
                    $('#validasiModal').modal("show");
                }
            });
        });
    });

    //Koor assignDopem
    $(document).ready(function() {
        $('body').on('click', '.assign', function(event) {
            event.preventDefault();
            var me = $(this),
                employee_id = me.attr("id"),
                url = me.attr('href'),
                title = me.attr('title'),
                fungsi = me.attr('fungsi');
            $('#modal-title').text(title);
            $('#modal-btn-save').text(fungsi);
            $.ajax({
                url: url,
                data: {
                    employee_id: employee_id
                },
                success: function(data) {
                    $('#assign_detail').html(data);
                    $('#assignModal').modal("show");
                }
            });
        });
    });

    //Koor submit
    $('body').on('click', '#modal-btn-save', function(event) {
        event.preventDefault();
        var me = $('#assign_detail form'),
            url = me.attr('action');
        $.ajax({
            url: url,
            method: 'PUT',
            data: me.serialize(),
            success: function(response) {
                me.trigger('reset');
                $('#assignModal').modal("hide");
                $("#assignModal").on('hidden.bs.modal', function() {
                    window.location.reload(true);
                });
            },
            error: function(xhr) {
                var errors = xhr.responseJSON;
                console.log(errors);
            }
        });
    });

    //Koor Validasi
    $('body').on('click', '#modal-btn-validasi', function(event) {
        event.preventDefault();
        var me = $('#validasi_detail form'),
            url = me.attr('action'),
            user = me.attr('user');
        $.ajax({
            url: url,
            method: 'PUT',
            data: me.serialize(),
            success: function(response) {
                me.trigger('reset');
                $('#validasiModal').modal("hide");
                $("#validasiModal").on('hidden.bs.modal', function() {
                    window.location.reload(true);
                });
            },
            error: function(xhr) {
                var errors = xhr.responseJSON;
                console.log(errors);
            }
        });
    });

    //KOOR lihat detail di cetak nilai
    $(document).ready(function() {
        $('body').on('click', '.view_cetak_lihat', function(event) {
            event.preventDefault();
            var me = $(this),
                employee_id = me.attr("id"),
                url = me.attr('href'),
                title = me.attr('title');
            $('#modal-title').text(title);
            $.ajax({
                url: url,
                data: {
                    employee_id: employee_id
                },
                success: function(data) {
                    $('#employee_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
    });
</script>