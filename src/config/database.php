<?php
     
    $host       = "localhost";
    $port       = "5432";
    $dbname     = "petstore";
    $user       = "postgres";
    $password   = "unicesmag";

    $conn = "  
        host = $host
        port = $port
        dbname = $dbname
        user = $user
        password=$password
    
    ";

    $conn = pg_connect($data_connection);

    if(!$conn){
        echo "Conection error"
    }
?>