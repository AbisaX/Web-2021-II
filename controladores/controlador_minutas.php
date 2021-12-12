<?php

    include_once("modelos/conexion.php");
    include_once("modelos/minutas.php");

    BD::crearInstancia();

    class ControladorMinutas {
        function listar() {
            $minutas = Minuta::listar();

            include_once("vistas/minutas/listado.php");
        }

        function registrar() {
            if ($_POST) {
                session_start();
                $fecha = $_POST["fecha"];
                $hora = $_POST["hora"];
                $tempFecha = strtotime($fecha." ".$hora);        
                $fechaCreacion = date('Y-m-d H:i:s', $tempFecha);
                $descripcion = $_POST["descripcion"];
                $usuario = $_SESSION["id"];

                Minuta::crear(
                    $descripcion,
                    $fechaCreacion,
                    $usuario
                );

                header("Location:./?controlador=minutas&accion=listar");
            }

            include_once("vistas/minutas/registro.php");
        }
    }
?>