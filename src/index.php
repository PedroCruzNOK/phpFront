<?php
    $datos = json_decode(file_get_contents("http://localhost:9000/empleados"), true);
    print_r($datos);
?>