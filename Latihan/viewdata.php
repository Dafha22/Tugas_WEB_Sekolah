<!DOCTYPE html>
<?php
    require "koneksi.php";

    
    $sql = "SELECT * FROM nilai_siswa";

    $hasil= mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($hasil);


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js" language="javascript"></script>

    <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.css">

    <title>DATA NILAI</title>

</head>
<body>
    <div class="container mt-2">
        <div id="tabel-label" class="h4 bg-success p-2 text-dark bg-opacity-50">
            Data Siswa
            <a href="index.php" class="btn btn-primary btn-sm float-end">tambah data</a>

        </div>
        <table class="table table-success table-striped h6">
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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $nilaiakhir = 0;
                    $grade = "F"; 

                    if (mysqli_num_rows($hasil)>0){
                        while($row = mysqli_fetch_assoc($hasil)){

                            //untuk menghitung nilai akhir

                            $totalkehadiran = ($row['jml_kehadiran']/14)*5;
                            $totaltugas = ($row['nilai_tugas'] * 0.1);
                            $totalformatif= ($row['nilai_formatif'] * 0.15);
                            $totaluts = ($row['nilai_uts'] * 0.3);
                            $totaluas = ($row['nilai_uas'] * 0.4);

                            $nilaiakhir = ($totalkehadiran)+($totaltugas)+($totalformatif)+($totaluts)+($totaluas);

                            


                            if ($nilaiakhir >= 0 & $nilaiakhir <= 40){
                                $grade = "F";
                            }
                            if ($nilaiakhir >= 41 & $nilaiakhir <= 55){
                                $grade = "D";
                            }
                            if ($nilaiakhir >= 56 & $nilaiakhir <= 75){
                                $grade = "C";
                            }
                            if ($nilaiakhir >= 76 & $nilaiakhir <= 90){
                                $grade = "B";
                            }
                            if ($nilaiakhir >= 91 & $nilaiakhir <= 100){
                                $grade = "A";
                            }
                                                            
                            
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
                    <td><?php echo number_format($nilaiakhir,2); ?></td>
                    <td><?php echo $grade ?></td>
                    <td>
                        <a href="editform.php?nis=<?php echo $row['nis']; ?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="konfirmasihapus.php?nis=<?php echo $row['nis'];?>"><i class="bi bi-trash3"></i></a>
                    </td>
                    
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
