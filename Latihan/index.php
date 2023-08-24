<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require "koneksi.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js" language="javascript"></script>

    <title>Input Nilai : siswa</title>
</head>
<body>
    <div class="container mt-2 w-50 border bg-body-secondary border-2 border-black p-2">
        <div id="labelForm" class="h5 bg-warning p-2 text-center">Input Data Siswa</div>

        <form action="prosesSiswa.php" method="GET">

            <div class="m-2">
                <label class="form-label m-0" for="">NIS :</label>
                <input class="form-control border-dark" type="text" name="nis" id="nis" placeholder="Isi nis Anda">
            </div>

            <div class="m-2">
                <label class="form-label m-0" for="">Nama Siswa :</label>
                <input class="form-control border-dark" type="text" name="nama" id="nama" placeholder="Isi Nama Anda">
            </div>

            <div class="m-2">
                <label class="form-label m-0" for="">Kelas :</label>
                <select name="kelas" id="kelas" class="form-select border-dark" placeholder="Pilih Kelas">
                    <option value="0">Pilih Kelas</option>
                    <option value="XII RPL-1">XII RPL 1</option>
                    <option value="XII RPL-2">XII RPL 2</option>
                    <option value="XII RPL-3">XII RPL 3</option>
                    <option value="XII RPL-4">XII RPL 4</option>
                </select>
            </div>

            <div class="m-2 d-grid gap-2 d-md-flex justify-content-md-end">
                <div class="mt-2">
                    <input class="btn btn-success x" type="submit" value="Proses">
                    <input class="btn btn-success " type="reset" value="hapus form">
                </div>
                
            </div>

        </form>
    </div>

    
</body>
</html>
