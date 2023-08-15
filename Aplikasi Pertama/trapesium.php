<?php
     $ab = 10;
     $bc = 10;
     $cd = 10;
     $ad = 10;
     $bagi = 0.5;
     $a = 25;
     $b = 15;
     $t = 10;
 
     $luastrapesium = $bagi * ($a * $b) * $t;
     $kelilingtrapesium = $ab + $bc + $cd + $ad; 
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
    <table border="3" width="400" style="margin-top: 50px;" class="table table-success table-striped">
        <tr>
            <td colspan="2" align="center">Trapesium</td>
        </tr>
        <tr>
            <td>AB Trapesiumt</td>
            <td><?php echo $ab ?></td>
        </tr>
        <tr>
            <td>BC Trapesium</td>
            <td><?php echo $bc ?></td>
        </tr>
        <tr>
            <td>CD Trapesium</td>
            <td><?php echo $cd ?></td>
        </tr>
        <tr>
            <td>ad Trapesium</td>
            <td><?php echo $ad ?></td>
        </tr>
        <tr>
            <td>Alas Trapesium</td>
            <td><?php echo $a ?></td>
        </tr>
        <tr>
            <td>Bawah Trapesium</td>
            <td><?php echo $b ?></td>
        </tr>
        <tr>
            <td>Tinggi Trapesium</td>
            <td><?php echo $t ?></td>
        </tr>
        <tr>
            <td>Luas Trapesium</td>
            <td><?php echo $luastrapesium ?></td>
        </tr>
        <tr>
            <td>Keliling Trapesium</td>
            <td><?php echo $kelilingtrapesium?></td>
        </tr>
        <tr>
            <td colspan="2" align="center">WWW.SMKTARUNABANGSA.sch.id</td>
        </tr>
    </table>
    </center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
