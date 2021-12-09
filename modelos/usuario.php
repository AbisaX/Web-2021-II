<?php

    class Usuario {
        public $id;
        public $username;
        public $nombre;
        public $rol;

        public function __construct(
            $id,
            $username,
            $nombre,
            $rol
        ) {
            $this->id = $id;
            $this->username = $username;
            $this->nombre = $nombre;
            $this->rol = $rol;
        }

        public static function listar() {
            $listadoUsuarios = [];
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM usuario");

            foreach($sql->fetchAll() as $usuario) {
                $listadoUsuarios[] = new Usuario(
                    $usuario['id'],
                    $usuario['username'],
                    $usuario['nombre'],
                    $usuario['rol']
                );
            }

            return $listadoUsuarios;
        }

        public static function crear(
            $nombre,
            $username,
            $password,
            $rol) {
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare("INSERT INTO usuario(nombre, username, `password`, rol) VALUES (:nombre, :username, :password, :rol)");
            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':username', $username);
            $sql->bindParam(':password', $password);
            $sql->bindParam(':rol', $rol);
            $sql->execute();
        }

        public static function eliminar($id) {
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare("DELETE FROM usuario WHERE id=$id");
            $sql->execute();
        }

        public static function buscar($id) {
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM usuario WHERE id=$id");
            $usuario = $sql->fetch();
            return new Usuario($usuario['id'], $usuario['username'], $usuario['nombre'], $usuario['rol']);
        }

        public static function editar($id, $rol, $nombre, $username) {
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("UPDATE usuario SET nombre='$nombre', username='$username', rol=$rol WHERE id=$id");
        }
    }

?>