<?php

class Pizza extends Articulo {
    private $ingredientes;
    public function __construct($nombre, $coste, $precio, $contador, $ingredientes) {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->ingredientes = $ingredientes;
    }

    public function getIng() {
        return $this->ingredientes;
    }

    public function setIng($ingredientes) {
        $this->ingredientes = $ingredientes;
    }
}