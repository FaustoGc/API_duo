<?php
include "/xampp/htdocs/API_duo/Modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("select * from clientes where Id_clientes=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">EDITAR</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "/xampp/htdocs/API_duo/Controlador/modificar_cliente.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" name="nombres" value="<?= $datos->nombres?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">APELLIDO</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido?>">
            </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TELEFONO</label>
                <input type="text" class="form-control" name="telefono" value="<?= $datos->telefono?>">
            </div>

        <?php
        }
        ?>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Editar Cliente</button>
    </form>
</body>

</html>