<?php

if (!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombres"]) and !empty($_POST["apellido"]) and !empty($_POST["telefono"]) ) {
      
        $nombres=$_POST["nombres"];
        $apellido=$_POST["apellido"];
        $telefono=$_POST["telefono"];

        $sql=$conexion->query("insert into clientes(nombres, apellido, telefono)values('$nombres', '$apellido', '$telefono')");
       
        if ($sql==1) {
            echo '<div class="alert alert-success">Registro exitoso</div>';
        } else {
            echo '<div class="alert alert-danger">Error de registro</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">No se pudo complear el registro</div>';
    }
}

?>