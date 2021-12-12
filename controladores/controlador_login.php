<?php

    include_once("modelos/login.php");
    include_once("modelos/conexion.php");

    BD::crearInstancia();

    class ControladorLogin {
        function inicio() {
             $error = "";
            if ($_POST) {
                $username = $_POST["username"];
                $password = $_POST["password"];

                if (strlen($username) == 0 || strlen($password) == 0) {
                    $error = "Por favor rellene todos los campos";
                } else {
                    $usuario = Login::iniciarSesion($username, $password);
                    if (strlen($usuario->id) == 0) {
                        $error = "Tu usuario con contraseña no coinciden";
                    } else {
                        session_start();
                        $_SESSION["nombre"] = $usuario->nombre;
                        $_SESSION["id"] = $usuario->id;
                        $_SESSION["rol"] = $usuario->rol;
                        
                        if ($usuario->rol == 1) {
                            header("Location:./?controlador=usuarios&accion=listar");
                        } else {
                            header("Location:./?controlador=minutas&accion=listar");
                        }
                    }
                }
            }
            
            include_once("vistas/login/inicio-sesion.php");
        }

        function logout() {
            session_start();
            $_SESSION = array();
            session_destroy();
            
            header("Location:./?controlador=login&accion=inicio");
        }
    }
?>