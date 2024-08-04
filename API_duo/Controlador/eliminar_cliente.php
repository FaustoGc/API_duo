<?php

if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from clientes where Id_clientes=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success text-center">Cliente eliminado correctamente</div>';
    } else{
        echo '<div class="alert alert-danger text-center">Error al eliminar cliente</div>';
    }
}

?>