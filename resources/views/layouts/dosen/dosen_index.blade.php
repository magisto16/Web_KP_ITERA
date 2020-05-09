<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Dosen Pembimbing</title>
    <link rel="stylesheet" href="{{asset('css/dosen/home_page.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/dosen/dopem_laporan.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/dosen/dopem_mhs.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/dosen/dopem_nilai.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/dosen/dopem_seminar.css')}}" type="text/css">
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
                    <a class="navbar-brand" href="#">DOSEN PEMBIMBING</a>
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
                <a href="{{route('dosen.index')}}" class="list-group-item">Beranda</a>
                <a href="{{route('dosen.mahasiswa.index')}}" class="list-group-item">Mahasiswa</a>
                <a href="{{route('dosen.laporan.index')}}" class="list-group-item">Laporan</a>
                <a href="{{route('dosen.nilai.index')}}" class="list-group-item">Nilai</a>
                <a href="{{route('dosen.seminar.index')}}" class="list-group-item">Jadwal Seminar</a>
            </div>
        </div>
        @yield('content')

    </div>

    <div class="footer">
        <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright</p>
    </div>

</body>

</html>
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Data Mahasiswa</h4>
            </div>
            <div class="modal-body" id="employee_detail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    //Script pagination
    $(document).ready(function() {
        $('#datatables').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });

    //Mahasiswa
    $(document).ready(function() {
        $('body').on('click', '.view_data_lihat', function(e) {
            e.preventDefault();
            var me = $(this),
                employee_id = me.attr("id"),
                url = me.attr('href'),
                fungsi = me.attr('fungsi');
            if (fungsi != "submit")
                $('#submitButton').remove();
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

    //Submit Button
    $('body').on('click', '#submitButton', function(event) {
        event.preventDefault();
        var me = $('#employee_detail form'),
            url = me.attr('action');
        $.ajax({
            url: url,
            method: 'PUT',
            data: me.serialize(),
            success: function(response) {
                me.trigger('reset');
                $('#dataModal').modal("hide");
                $("#dataModal").on('hidden.bs.modal', function() {
                    window.location.reload(true);
                });
            },
            error: function(xhr) {
                var errors = xhr.responseJSON;
                console.log(errors);
            }
        });
    });

    //SCRIPT DOPEM LAPORAN
    $('body').on('click', '.view_data', function(event) {
        var laporan_id = $(this).attr("id");

        $.post('dopem_laporan_lihat.php', {
                postid: laporan_id
            },
            function(data) {
                $('#content1').html(data);
            });
    });

    //Scrip Acc Jadwal Seminar
    $(document).ready(function() {
        $('body').on('change', '#seminar_acc', function(event) {
            if (this.value == '1') {
                $("#seminarCatatanLabel").hide();
            } else if (this.value == '0') {
                $("#seminarCatatanLabel").show();
            }
        });
    });
</script>