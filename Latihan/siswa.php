<?php

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    
    // $nilaikehadiran = 10;
    // $nilaitugas = 80;
    // $nilaiformatif = 75;
    // $nilaiuts = 80;    
    // $nilaiuas = 75;

    $nilaikehadiran = $_POST['kehadiran'];
    $nilaitugas = $_POST['tugas'];
    $nilaiformatif = $_POST['formatif'];
    $nilaiuts = $_POST['uts'];    
    $nilaiuas = $_POST['uas'];



    $totalkehadiran = ($nilaikehadiran/14)*5;
    $totaltugas = ($nilaitugas * 0.1);
    $totalformatif= ($nilaiformatif * 0.15);
    $totaluts = ($nilaiuts * 0.3);
    $totaluas = ($nilaiuas * 0.4);
    $nilaiakhir = ($totalkehadiran)+($totaltugas)+($totalformatif)+($totaluts)+($totaluas);

    /*
    $grade = "F"; 
        if ($nilaiakhir >=40){
            $grade = "D";
        }
        if ($nilaiakhir >=55){
            $grade = "C";
        }
        if ($nilaiakhir >=75){
            $grade = "B";
        }
        if ($nilaiakhir >=90){
            $grade = "A";
        }
    */

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Simpan</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        main{
            background-color: white;
            width: 550px;
            height: 550px;
            
        }
    </style>
</head>
<body>
    <center>
        <main>
            <h1>Menghitung Nilai Mahasiswa</h1>
            <table border="0" width="400" style="margin-top: 30px;" cellspacing="0" cellspading="2">
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><?php echo $nis?></td>
                    <td rowspan="10" style="padding:20px; text-align:center; font-size:18px; border:3px solid green"><?php echo $grade?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $nama?></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><?php echo $kelas?></td>
                </tr>
                <tr style="background-color: green;width:100%; height:5px;">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td>Nilai Kehadiran</td>
                    <td>:</td>
                    <td><?php echo $nilaikehadiran." (".number_format($totalkehadiran,2).")" ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><?php echo $nilaitugas ." (".number_format($totaltugas,0).")"?></td>
                </tr>
                <tr>
                    <td>Nilai Formatif</td>
                    <td>:</td>
                    <td><?php echo $nilaiformatif ." (".number_format($totalformatif,2).")";?></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><?php echo $nilaiuts ." (".number_format($totaluts,0).")"?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><?php echo $nilaiuas." (".number_format($totaluas,0).")"?></td>
                </tr>
                <tr style="background-color: skyblue;">
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td><?php echo number_format($nilaiakhir,2)?></td>
                    
                </tr>
                
            </table>
        </main>
    </center>
</body>
</html>