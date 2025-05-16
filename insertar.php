<?php
    include("conexion.php");
    $conn = conectar();
    $ine = $_POST['ine'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql = "INSERT INTO alumnos VALUES (null, '$ine', '$nombre', '$apellido')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        Header("Location: index.php");
    } else {
        echo $query;
    }
?>