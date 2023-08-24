<!DOCTYPE html>
<html lang="en">
    <?php

        //VALIDASI MENGGUNAKAN isset() dan empty()

        // if(isset($_GET['nis']) && empty($_GET['nis']) ){

        // }

        
        
        if(empty($_GET['nis']) ){
            die('Nis kosong... isi dong! <a href="#" onclick="return history.back(0)">Kembali</a>');
        }
        if(empty($_GET['nama']) ){
            die('Nama kosong... isi dong! <a href="#" onclick="return history.back(0)">Kembali</a>');
        }
        if(empty($_GET['kelas']) ){
            die('Kelas kosong... isi dong! <a href="#" onclick="return history.back(0)">Kembali</a>');
        }

        $nis = $_GET['nis'];
        $nama = $_GET['nama'];
        $kelas = $_GET['kelas'];
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js" language="javascript"></script>

    <title>Input Nilai : Nilai</title>
</head>
<body>
    <form action="siswa.php" method="POST">
        <div class="container mt-2 w-50 border bg-body-secondary border-2 border-black p-2">
            <div id="labelForm" class="h5 bg-info p-2 text-center">Input Nilai Siswa</div>

            <div id="header" class="container">

                <div class="mb-2">
                    <div>NIS :</div>
                    <div class="container border border-1 border-black"><b><?php echo $nis ?></b></div>
                    <input type="hidden" name="nis" value="<?php echo $nis; ?>">
                </div>

                <div class="mb-2">
                    <div>Nama Siswa :</div>
                    <div class="container border border-1 border-black"><b><?php echo $nama ?></b></div>
                    <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                </div>

                <div class="mb-2">
                    <div>Kelas :</div>
                    <div class="container border border-1 border-black"><b><?php echo $kelas ?></b></div>
                    <input type="hidden" name="kelas" value="<?php echo $kelas; ?>">
                </div>

            </div>
            <hr class="border border-2 border-danger">
            
            
            <div id="isi" class="container">

                <div class="h5">masukan nilai</div>

                <div class="mb-2">
                    <label for="">Jml. Kehadiran</label>
                    <input class="form-control" type="number" name="kehadiran"max="14 placeholder="isi nilai kehadiran....">
                </div>

                <div class="mb-2">
                    <label for="">Nilai Tugas</label>
                    <input class="form-control" type="number" name="tugas" placeholder="isi nilai tugas....">
                </div>

                <div class="mb-2">
                    <label for="">Nilai Formatif</label>
                    <input class="form-control" type="number" name="formatif" placeholder="isi nilai formatif....">
                </div>

                <div class="mb-2">
                    <label for="">Nilai UTS</label>
                    <input class="form-control" type="number" name="uts" placeholder="isi nilai uts....">
                </div>

                <div class="mb-2">
                    <label for="">Nilai UAS</label>
                    <input class="form-control" type="number" name="uas" placeholder="isi nilai uas....">
                </div>

                <div class="d-grid gap-2">
                    <input class="btn btn-primary " type="submit" value="simpan">
                </div>
            </div>
        </div>
    </form>  
</body>
</html>
