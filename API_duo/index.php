<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API CRUD Fausto y Tanny</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dffa82b78f.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>
function eliminar(){
    var respuesta=confirm("Estas seguro que deseas eliminar al cliente?");
    return respuesta
}

    </script>
    <h1 class="text-center p-3">API DE PRODUCTOS PARA EL HOGAR</h1>
    <?php
    include "/xampp/htdocs/API_duo/Modelo/conexion.php";
    include "/xampp/htdocs/API_duo/Controlador/eliminar_cliente.php"
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">REGISTRO</h3>
            <?php
            include "/xampp/htdocs/API_duo/Controlador/registro_cliente.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombres">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido </label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono </label>
                <input type="text" class="form-control" name="telefono">
            </div>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">REGISTRAR</button>
        </form>
        <div class="col-8 p-4">
            <table class="table table-hover table-bordered border-primary">
                <thead>
                    <tr class="table-Info">
                        <th scope="col">ID</th>
                        <th scope="col">nombres</th>
                        <th scope="col">apellido</th>
                        <th scope="col">telefono</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "/xampp/htdocs/API_duo/Modelo/conexion.php";
                    $sql = $conexion->query("select * from clientes ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr class="table-Dark">
                            <td><?= $datos->Id_clientes ?></td>
                            <td><?= $datos->nombres ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->telefono ?></td>
                            <td>
                                <a href="http://localhost/API_duo/modificar_cliente.php?id=<?= $datos->Id_clientes ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->Id_clientes ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>