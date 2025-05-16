<?php
    include("conexion.php");
    $conn = conectar();
    $cod_estudiante = $_POST['cod_estudiante'];
    $ine = $_POST['ine'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql = "UPDATE alumnos SET ine='$ine', nombre='$nombre', apellido='$apellido' WHERE cod_estudiante='$cod_estudiante'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        Header("Location: index.php");
    } else {
        echo $query;
    }
?>