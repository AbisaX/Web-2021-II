<?php

    include_once("modelos/usuario.php");
    include_once("modelos/conexion.php");

    BD::crearInstancia();

    class ControladorUsuarios {
        function listar() {
            $usuarios = Usuario::listar();
            $roles = array(
                "1" => "Administrador",
                "2" => "Vigilante"
            );
            include_once("vistas/usuarios/listado.php");
        }

        function registrar() {
            if ($_POST) {
                $nombre = $_POST["nombre"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $rol = (int)$_POST["rol"];

                Usuario::crear(
                    $nombre,
                    $username,
                    $password,
                    $rol
                );

                header("Location:./?controlador=usuarios&accion=listar");
            }

            include_once("vistas/usuarios/registro.php");
        }

        function editar() {
            $id = (int)$_GET['id'];

            if ($_POST) {
                $rol = (int)$_POST['rol'];
                $nombre = $_POST['nombre'];
                $username = $_POST['username'];
                
                Usuario::editar($id, $rol, $nombre, $username);
                header("Location:./?controlador=usuarios&accion=listar");
            }

            $usuario = Usuario::buscar($id);
            include_once("vistas/usuarios/edicion.php");
        }

        function eliminar() {
            $id = (int)$_GET['id'];

            Usuario::eliminar($id);
            header("Location:./?controlador=usuarios&accion=listar");

        }
    }
?>