<?php

class Bebida extends Articulo {
    private $alcohol;
    public function __construct($nombre, $coste, $precio, $contador, $alcohol) {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->alcohol = $alcohol;
    }

    public function getAlc() {
        return $this->alcohol;
    }

    public function setAlc($alcohol) {
        $this->alcohol = $alcohol;
    }

}