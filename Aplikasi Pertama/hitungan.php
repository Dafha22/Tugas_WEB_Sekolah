<?php

    $a = 6;
    $b = 8;

    $pertambahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    
    echo "penjumlahan dari $a + $b = $pertambahan <br>";
    echo "pengurangan dari $a - $b = $pengurangan <br>";
    echo "perkalian dari $a * $b = $perkalian <br>";
    echo "pembagian dari $a : $b = $pembagian <br>";

    $p = 12;
    $l = 14;

    $luas = $p * $l;
    $keliling = 2*($p+$l);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="0" width="300">
        <tr>
            <td>Persegi Panjang</td>
        </tr>
        <tr>
            <td>Panjang Persegi Panjang</td>
            <td><?php echo $p ?></td>
        </tr>
        <tr>
            <td>Lebar Persegi Panjang</td>
            <td><?php echo $l ?></td>
            
        </tr>
        <tr>
            <td>Luas Persegi Panjang</td>
            <td><?php echo $luas  ?></td>
        </tr>
        <tr>
            <td>Keliling Persegi Panjang</td>
            <td><?php echo $keliling?></td>
        </tr>
    </table>
</body>
</html>
