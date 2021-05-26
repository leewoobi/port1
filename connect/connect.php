<?php
    $host = "localhost";
    $user = "leeraincoat";
    $pw = "Dnql2147!";
    $dbName = "leeraincoat";
    $dbConnect = new mysqli($host,$user,$pw,$dbName);
    $dbConnect->set_charset("utf-8");

    if(mysqli_connect_errno()){
        echo "database connect false";
    }else {
        // echo "dayabase connect true"; 
    }


?>