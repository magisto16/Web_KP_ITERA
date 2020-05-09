<?php
if (isset($_POST["employee_id"])) {
    $output = '';
    $connect = mysqli_connect("localhost", "root", "", "kp_if_itera");
    $query = "SELECT * FROM mahasiswa WHERE Nama = '" . $_POST["employee_id"] . "'";
    $result = mysqli_query($connect, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Nama</label></td>  
                     <td width="70%">' . $row["Nama"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>NIM</label></td>  
                     <td width="70%">' . $row["NIM"] . '</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Alamat</label></td>  
                     <td width="70%">' . $row["Alamat"] . '</td>  
                </tr>    
                <tr>  
                     <td width="30%"><label>Kontak Person</label></td>  
                     <td width="70%">' . $row["Kontak Person"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">' . $row["Email"] . '</td>  
                </tr> 
                ';
    }
    $output .= "</table></div>";
    echo $output;
}
