<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penjualan</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }

    </style>
</head>
<body>

    <?php
        $barang ="sepatu";
        $harga = 3500;
        $matauang ="perak";
        $jumlahbeli = 5;
        
    ?>

    <div class="wrapper">
        <div class="header">
            <h1>Toko Kami</h1>
            <nav >
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#produk">Produk</a></li>
                    <li><a href="#cara-pesan">Cara Pesan</a></li>
                    <li><a href="#pembayaran">Pembayaran</a></li>
                    <li><a href="#lokasi">Lokasi</a></li>
                </ul>
            </nav>
        </div>
        <div class="isi">
            <h1>Form Pembelian Barang</h1>
            <table border="0" width="300">
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><?php echo"$barang"; ?></td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td>:</td>
                    <td><?php echo"$harga"; ?></td>
                </tr>
                <tr>
                    <td>Mata Uang</td>
                    <td>:</td>
                    <td><?php echo"$matauang"; ?></td>
                </tr>
                <tr>
                    <td>Jumlah Beli</td>
                    <td>:</td>
                    <td><?php echo"$jumlahbeli"; ?></td>
                </tr>
                <tr>
                    <td>total</td>
                    <td>:</td>
                    <td><?php echo"$harga - $jumlahbeli"; ?></td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
