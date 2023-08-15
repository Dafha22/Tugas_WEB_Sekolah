<?php

    $d1belahketupat = 20;
    $d2belahketupat = 20;
    $sbelahketupat = 10;
    $bagi = 0.5;

    $luasbelahketupat = $d1belahketupat * $d2belahketupat * $bagi;
    $kelilingbelahketupat = 4 * $sbelahketupat;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            font-size: 25px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <center>
    <table border="1" width="400" style="margin-top: 50px; border: 5px solid salmon;">
        <tr style="background-color: pink;">
            <td colspan="2" align="center">Belah ketupat</td>
        </tr>
        <tr style="background-color: red;">
            <td>D1 Belah ketupat</td>
            <td><?php echo $d1belahketupat ?></td>
        </tr>
        <tr style="background-color: salmon;">
            <td>D2 Belah ketupat</td>
            <td><?php echo $d2belahketupat ?></td>
        </tr>
        <tr style="background-color: orange;">
            <td>sisi Belah ketupat</td>
            <td><?php echo $sbelahketupat ?></td>
        </tr>
        <tr style="background-color: skyblue;">
            <td>Luas Belah ketupat</td>
            <td><?php echo $luasbelahketupat ?></td>
        </tr>
        <tr style="background-color: green;">
            <td>Keliling Belah ketupat</td>
            <td><?php echo $kelilingbelahketupat?></td>
        </tr>
        <tr style="background-color: yellow;">
            <td colspan="2" align="center">WWW.SMKTARUNABANGSA.sch.id</td>
        </tr>
    </table>
    </center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anony
</html>
