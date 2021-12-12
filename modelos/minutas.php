<?php

    class Minuta {
        public $id;
        public $descripcion;
        public $fechaCreacion;
        public $usuario;

        public function __construct(
            $id,
            $descripcion,
            $fechaCreacion,
            $usuario
        ) {
            $this->id = $id;
            $this->descripcion = $descripcion;
            $this->fechaCreacion = $fechaCreacion;
            $this->usuario = $usuario;
        }

        public static function listar() {
            $listadoMinutas = [];
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->query("SELECT * FROM `minuta` INNER JOIN usuario ON minuta.usuario = usuario.id");

            foreach($sql->fetchAll() as $minuta) {
                $listadoMinutas[] = new Minuta(
                    $minuta['id'],
                    $minuta['descripcion'],
                    $minuta['fechaCreacion'],
                    $minuta['nombre']
                );
            }

            return $listadoMinutas;
        }

        public static function crear(
            $descripcion,
            $fechaCreacion,
            $usuario) {
            $conexionBD = BD::crearInstancia();
            $sql = $conexionBD->prepare("INSERT INTO minuta(descripcion, fechaCreacion, usuario) VALUES (:descripcion, :fechaCreacion, :usuario)");
            $sql->bindParam(':descripcion', $descripcion);
            $sql->bindParam(':fechaCreacion', $fechaCreacion);
            $sql->bindParam(':usuario', $usuario);
            $sql->execute();
        }
    }

?>