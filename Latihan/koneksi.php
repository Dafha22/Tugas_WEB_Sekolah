<?php

    /*
        file ini terbuat dari umbi umbian yang 
        melakukan koneksi database, dengan menggunakan 
        konser OOP Prosddural.

        mysql_connect(serverAddr, user, pwd, db)
    */

    $hostname = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $database = "vokasi" ;


    //error_reporting(0);
    //mysqli_report(MYSQLI_REPORT_OFF);
    
    $conn = mysqli_connect($hostname,$username,$password,$database);

    if (mysqli_connect_errno()){
        die ("Ada Erro Coy... nih Disini : ".mysqli_connect_error());
    }

    // echo "DASHBOARD"
?>
