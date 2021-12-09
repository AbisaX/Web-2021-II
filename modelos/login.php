<?php

    class Login {
        public $id;
        public $username;
        public $nombre;
        private $password;
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

        public static function iniciarSesion($username, $password) {
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM usuario WHERE username='$username' AND `password`= '$password'");
            $data = $sql->fetch();
            $sesion = new Login($data['id'], $data['username'], $data['nombre'], $data['rol']);

            return $sesion;
        }
    }

?>