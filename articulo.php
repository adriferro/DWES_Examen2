<?php
class Articulo {
    private $nombre;
    private $coste;
    private $precio;
    private $contador;

    public function __construct($nombre, $coste, $precio, $contador) {
        $this->nombre = $nombre;
        $this->coste = $coste;
        $this->precio = $precio;
        $this->contador = $contador;
}
}