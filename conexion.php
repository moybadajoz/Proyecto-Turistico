<?php
    function conectar(){
        $host = "localhost:8889";
        $user = "root";
        $pass = "root";
        $bd = "turismo";
        $conn = mysqli_connect($host, $user, $pass);
        mysqli_select_db($conn, $bd);
        return $conn;
    }
?>