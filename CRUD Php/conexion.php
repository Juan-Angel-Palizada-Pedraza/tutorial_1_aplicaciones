<?php   
    function conectar(){
        $host = "localhost:8889";
        $user = "root";
        $pass = "root";
        $db = "proyectophp";
        $conn = mysqli_connect($host, $user, $pass, $db);
        
        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        return $conn;
    }
?>
