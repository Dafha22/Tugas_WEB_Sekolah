<!DOCTYPE html>
<?php
    require "koneksi.php";

    
    $sql = "SELECT * FROM nilai_siswa";

    $hasil= mysqli_query($conn, $sql);

    // $row = mysqli_fetch_assoc($hasil);


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js" language="javascript"></script>

    <title>DATA NILAI</title>

</head>
<body>
    <div>
        <table class="table table-info h5">
            <caption></caption>
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Nilai Kehadiran</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai Formatif</th>
                    <th>Nilai UTS</th>
                    <th>Nilai UAS</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (mysqli_num_rows($hasil)>0){
                        while($row = mysqli_fetch_assoc($hasil)){
                            
                ?>
                <tr>
                    <td><?php echo $row['nis']; ?></td>
                    <td><?php echo $row['nama_siswa']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['jml_kehadiran']; ?></td>
                    <td><?php echo $row['nilai_tugas']; ?></td>
                    <td><?php echo $row['nilai_formatif']; ?></td>
                    <td><?php echo $row['nilai_uts']; ?></td>
                    <td><?php echo $row['nilai_uas']; ?></td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <?php

                        }
                    }

                ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</body>
</html>