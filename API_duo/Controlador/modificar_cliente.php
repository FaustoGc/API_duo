<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellido"]) and !empty($_POST["telefono"])) {
        $id=$_POST["id"];
        $nombres=$_POST["nombres"];
        $apellido=$_POST["apellido"];
        $telefono=$_POST["telefono"];
        $sql=$conexion->query("update clientes set nombres='$nombres', apellido='$apellido', telefono='$telefono' where Id_clientes=$id");
        if ($sql==1) {
            header("location:index.php");
        } else{
            echo "<div class='alert alert=danger'>Error al modificar el cliente</div>";
        }
    } else{
        echo "<div class='alert alert=warning'>Campos Vacios</div>";
    }
}

?>