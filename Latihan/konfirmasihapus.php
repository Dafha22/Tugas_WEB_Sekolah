<?php
    require "koneksi.php";

    $nis = $_GET['nis'];
    
    echo "Yakin mau di hapus $nis : 
        <a href='hapusdata.php?nis=$nis'>Yes</a>
        <a href='viewdata.php'>No</a>";
?>