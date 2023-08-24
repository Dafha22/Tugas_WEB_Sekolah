<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.css">

    <title>Document</title>
</head>
<body>        
    <nav class="navbar bg-warning">
        <div class="container">
            <div class="navbar-brand">
                MyWeb
            </div>

            <div>
                <a href="#" class="btn btn-success">Beranda</a>
                <a href="?menu=nilaisiswa" class="btn btn-success">Nilai Siswa</a>
                <a href="#" class="btn btn-success">Data Siswa</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php

            if(isset($_GET['menu'])){
                if($_GET['menu']=='nilaisiswa'){
                    include_once "viewdata.php";
                }
            }else {
                echo "<span class='h4'>welcome, di aplikasi ini </span>";
            }

        ?>



        
    </div>
    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>