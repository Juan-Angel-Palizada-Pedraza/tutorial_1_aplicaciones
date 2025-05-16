<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_GET['id'];
    $sql = "SELECT * FROM alumnos WHERE cod_estudiante='$id'";
    $query = mysqli_query($conn, $sql);
    $alumno = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP - Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <h1 class="text-center">Proyecto CRUD 🗒️</h1>
        </div>
        <form action="update.php" method="post">
            <input type="text" name="cod_estudiante" value="<?php echo $alumno['cod_estudiante']?>" hidden>
            <input type="text" name="ine" class="form-control mb-3" value="<?php echo $alumno['ine']?>" placeholder="Escribe tu INE"> 
            <input type="text" name="nombre" class="form-control mb-3" value="<?php echo $alumno['nombre']?>" placeholder="Escribe tu nombre">
            <input type="text" name="apellido" class="form-control mb-3" value="<?php echo $alumno['apellido']?>" placeholder="Escribe tus apellidos"> 
            <input type="submit" value="Actualizar" class="btn btn-primary btn_block">
            <button class="btn btn-dark" @onclick ="location.redirect('index.php')">
                Regresar
            </button>
        </form>
    </div>
</body>
</html>