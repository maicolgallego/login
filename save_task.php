<?php

include('db.php');

if (isset($_post['save_task'])){
    $usuario= $_post['usuario'];
    $contraseÃ±a= $_post['contraseÃ±a'];
    $fechadenacimiento= $_post['fechadenacimiento'];
    $telefono= $_post['telefono'];
    $correoelectronico= $_post['correoelectronico'];

    $query ="insert into usuario values"('usuario','$contraseÃ±a','$correoelectronico','$telefono','$fechadenacimiento');

}