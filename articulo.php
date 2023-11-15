<?php
class Articulo {
    public $nombre;
    public $coste;
    public $precio;
    public $contador;

    public function __construct($nombre, $coste, $precio, $contador) {
        $this->nombre = $nombre;
        $this->coste = $coste;
        $this->precio = $precio;
        $this->contador = $contador;
    }

    public function getNom() {
        return $this->nombre;
    }

    public function setNom($nombre) {
        $this->nombre = $nombre;
    }

    public function getCos() {
        return $this->coste;
    }

    public function setCos($coste) {
        $this->coste = $coste;
    }

    public function getPre() {
        return $this->precio;
    }

    public function setPre($precio) {   
        $this->precio = $precio;
    }

    public function getCont() {
        return $this->contador;
    }

    public function setCont($contador) {   
        $this->contador = $contador;
    }

    public function __toString() {
        return "{$this->nombre}";

    }

}