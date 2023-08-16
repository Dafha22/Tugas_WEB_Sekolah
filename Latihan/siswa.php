<?php
    /*
        fungsi untuk melampirkan file
        include() ---> include_once()
        require() ---> require_once()
    */

    require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php

        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        // $nilaikehadiran = 10;
        // $nilaitugas = 80;
        // $nilaiformatif = 75;
        // $nilaiuts = 80;    
        // $nilaiuas = 75;


        //variable nilai
        $nilaikehadiran = $_POST['kehadiran'];
        $nilaitugas = $_POST['tugas'];
        $nilaiformatif = $_POST['formatif'];
        $nilaiuts = $_POST['uts'];    
        $nilaiuas = $_POST['uas'];

        // Blok query dan simpan data

        $sql = "INSERT INTO 
                    nilai_siswa(
                        nis,
                        nama_siswa,
                        kelas,
                        jml_kehadiran,
                        nilai_tugas,
                        nilai_formatif,
                        nilai_uts,
                        nilai_uas,
                        nilai_akhir
                    ) 
                    VALUES(
                        '$nis',
                        '$nama',
                        '$kelas',
                        '$nilaikehadiran',
                        '$nilaitugas',
                        '$nilaiformatif',
                        '$nilaiuts',
                        '$nilaiuas',
                        '$nilaiakhir')";

        $hasil = mysqli_query($conn, $sql);

        if(!$hasil){
            // echo "data sudah masuk! <a href='index.php'>Kembali</a>";
        }else {
            die("<br>proses simpan eror! nih erornya : ".mysqli_error($conn));
        }

        //melakukan pencarian data
        //atau istilah query
        $sql = "SELECT * FROM nilai_siswa WHERE nis='$nis'";

        $hasil = mysqli_query($conn, $sql);

        if(mysqli_num_rows($hasil)<=0){
            die("wah query ngaco...");
        }

        //fetching --> Array --> index & label
        //fetching --> Asosiasi --> label

        $row = mysqli_fetch_array($hasil);
        
        // var_dump($row);

        // echo "<pre>";
        // echo var_dump($row);
        // echo "<pre>";

  
        


        //hasil hitungan presentasi
        $totalkehadiran = ($row[3]/14)*5;
        $totaltugas = $row['nilai_tugas'] * 0.1;
        $totalformatif= $row['nilai_formatif'] * 0.15;
        $totaluts = $row['nilai_uts'] * 0.3;
        $totaluas = $row['nilai_uas'] * 0.4;

        $nilaiakhir = ($totalkehadiran)+($totaltugas)+($totalformatif)+($totaluts)+($totaluas);

        //menentukan hasil grade nilai nya
        $grade = ""; 
            // if ($nilaiakhir >=40){
            //     $grade = "D";
            // }
            // if ($nilaiakhir >=55){
            //     $grade = "C";
            // }
            // if ($nilaiakhir >=75){
            //     $grade = "B";
            // }
            // if ($nilaiakhir >=90){
            //     $grade = "A";
            // }

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


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Simpan</title>
    
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js" language="javascript"></script>
    
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        main{
            border: 5px solid skyblue;
            width: 550px;
            height: 350px;
            
        }
   
    </style>
</head>
<body>
    <center>
        <div class="alert alert-success w-25 mx-auto">Data Berhasil Di input <a href="index.php" class="btn btn-warning">Kembali</a></div>
        <main>
            <h1>Menghitung Nilai Mahasiswa</h1>
            <table border="0" width="400" style="margin-top: 30px;" cellspacing="0" cellspading="2">
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><?php echo $row[0]; ?></td>
                    <td rowspan="10" style="padding:20px; text-align:center; font-size:18px; border:3px solid green">Grade : <?php echo $grade ?></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><?php echo $row[1]; ?></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><?php echo $row[2]; ?></td>
                </tr>
                <tr style="background-color: green;width:100%; height:5px;">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td>Nilai Kehadiran</td>
                    <td>:</td>
                    <td><?php echo $row[3] ." (".number_format($totalkehadiran,2).")" ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><?php echo $row['nilai_tugas'] ." (".number_format($totaltugas,0).")"?></td>
                </tr>
                <tr>
                    <td>Nilai Formatif</td>
                    <td>:</td>
                    <td><?php echo $row['nilai_formatif'] ." (".number_format($totalformatif,2).")";?></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><?php echo $row['nilai_uts'] ." (".number_format($totaluts,0).")"?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><?php echo $row['nilai_uas'] ." (".number_format($totaluas,0).")"?></td>
                </tr>
                <tr style="background-color: skyblue;">
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td><?php echo number_format($row['nilai_akhir'],2)?></td>
                    
                </tr>
                
            </table>
        </main>
    </center>
</body>
</html>
