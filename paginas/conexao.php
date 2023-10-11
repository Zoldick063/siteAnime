<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "anime";

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
?>