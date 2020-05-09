<?php
$connect = mysqli_connect("localhost", "root", "", "kp_if_itera");
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/koor_validasi.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <div class=" header">
        <h1>Institut Teknologi Sumatera</h1>
    </div>

    <div class="nav-bar">
        <nav class="navbar navbar-custom navbar-static-top">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Dhiko JangJaya Putra</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-3 col-s-12 menu">
            <ul>
                <li><a href="home_page.php">Beranda</a></li>
                <li><a href="koor_mhs.php">Mahasiswa</a></li>
                <li><a href="koor_laporan.php">Laporan</a></li>
                <li><a href="koor_cetak.php">Cetak Nilai</a></li>
                <li><a href="koor_validasi.php">Validasi</a></li>
                <li><a href="koor_dopem.php">Dosen Pembimbing</a></li>
            </ul>
        </div>

        <div class="col-9 col-s-12 content">

            <table class=" col-12 col-s-12 table table-hover">
                <thead>
                    <tr>
                        <th>Mahasiswa</th>
                        <th colspan="3">Lainnya</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["Nama"]; ?></td>
                            <td><input type="button" name="view" value="Validasi" id="<?php echo $row["Nama"]; ?>" class="btn btn-info btn-xs view_data_validasi" /></td>
                            <td><input type="button" name="view" value="Assign" id="<?php echo $row["Nama"]; ?>" class="btn btn-info btn-xs view_data_assign" /></td>
                            <td><input type="button" name="view" value="Lihat" id="<?php echo $row["Nama"]; ?>" class="btn btn-info btn-xs view_data_lihat" /></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

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
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.view_data_lihat').click(function() {
            var employee_id = $(this).attr("id");
            $.ajax({
                url: "koor_validasi_lihat.php",
                method: "post",
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

    $(document).ready(function() {
        $('.view_data_validasi').click(function() {
            var employee_id = $(this).attr("id");
            $.ajax({
                url: "koor_validasi_validasi.php",
                method: "post",
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

    $(document).ready(function() {
        $('.view_data_assign').click(function() {
            var employee_id = $(this).attr("id");
            $.ajax({
                url: "koor_validasi_assign.php",
                method: "post",
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