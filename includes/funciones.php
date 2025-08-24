<?php


function obtener_servicios(){
    try {
        //importar las credenciales
        require 'database.php';

        //consulta sql
        $sql = "SELECT * FROM servicios;";

        //realizar la consulta

        $consulta = mysqli_query($db, $sql);


        return $consulta;
        //acceder a los resultados
        

        //cerrar la conexion(opcional)

        $resultado = mysqli_close($db);
        echo $resultado;


    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();