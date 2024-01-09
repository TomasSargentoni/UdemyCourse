<?php

function obtener_servicios() {

    try {
        // Importar las credenciales
        require "database.php";


        // Consulta SQL
        $sql = "SELECT * FROM servicios;";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        return $consulta;
        // Acceder a los resultados


    


    } catch (\Throwable $th) {
        var_dump($th);
    }
}


obtener_servicios();