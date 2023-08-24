<?php
    require "koneksi.php";


    $nis = $_GET['nis'];

    $sql = "DELETE FROM nilai_siswa WHERE nis = '$nis'";

    $hapus = mysqli_query($conn, $sql);

    if($hapus){
        if(mysqli_affected_rows($conn)>0){
            // echo "Data Berhasil Dihapus! <a href='viewdata.php'>Kembali</a>";
            
            header('location:viewdata.php');
        }else{
            echo "Data Tidak Berhasil Dihapus! <a href='viewdata.php'>Kembali</a>";
            
        }
    }else{
        echo "ada eror querynya";
    }

?>