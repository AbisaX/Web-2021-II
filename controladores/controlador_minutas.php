<?php

    // include_once("modelos/login.php");
    include_once("modelos/conexion.php");

    BD::crearInstancia();

    class ControladorMinutas {
        function listar() {
            include_once("vistas/minutas/listado.php");
        }
    }
?>