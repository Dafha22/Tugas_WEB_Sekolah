<!DOCTYPE html>
<html lang="en">
<?php
require "koneksi.php";

    $nis = $_GET['nis'];

    $sql = "SELECT * FROM nilai_siswa WHERE nis='$nis'";

    $hasil = mysqli_query($conn, $sql);

    if(mysqli_num_rows($hasil)<=0){
        die("Ada Permasalahan error :"+ mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($hasil);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js" language="javascript"></script>

    <title>edit form</title>
</head>
<body>
    <form action="siswa.php" method="POST">
        <div class="container mt-2 w-50 border bg-body-secondary border-2 border-black p-2">
            <div id="labelForm" class="h5 bg-info p-2 text-center">Update Siswa</div>

            <div id="header" class="container">

                <div class="mb-2">
                    <div>NIS :</div>
                        <input class="form-control" type="type" name="nis" value="<?php echo $row['nis']; ?>">   
                </div>

                <div class="mb-2">
                    <div>Nama Siswa :</div>
                        <input class="form-control" type="type" name="nama" value="<?php echo $row['nama_siswa'] ?>">
                </div>

                <div class="mb-2">
                    <div>Kelas :</div>
                        <input class="form-control" type="text" name="kelas" value="<?php echo $row['kelas'] ?>">
                </div>

            </div>
            <hr class="border border-2 border-danger">
            
            
            <div id="isi" class="container">

                <div class="h5">masukan nilai</div>

                <div class="mb-2">
                    <label for="">Jml. Kehadiran</label>
                    <input class="form-control" type="number" name="kehadiran" placeholder="isi nilai kehadiran...." value="<?php $row['jml_kehadiran']?>">
                </div>

                <div class="mb-2">
                    <label for="">Nilai Tugas</label>
                    <input class="form-control" type="number" name="tugas" placeholder="isi nilai tugas...." value="<?php $row['nilai_tugas']?>">
                </div>

                <div class="mb-2">
                    <label for="">Nilai Formatif</label>
                    <input class="form-control" type="number" name="formatif" placeholder="isi nilai formatif...." value="<?php $row['nilai_formatif']?>">
                </div>

                <div class="mb-2">
                    <label for="">Nilai UTS</label>
                    <input class="form-control" type="number" name="uts" placeholder="isi nilai uts...." value="<?php $row['nilai_uts']?>">
                </div>

                <div class="mb-2">
                    <label for="">Nilai UAS</label>
                    <input class="form-control" type="number" name="uas" placeholder="isi nilai uas...." value="<?php $row['nilai_uas']?>">
                </div>

                <div class="d-grid gap-2">
                    <input class="btn btn-primary " type="submit" value="Simpan Perubahan">
                </div>
            </div>
        </div>
    </form>  
</body>
</html>