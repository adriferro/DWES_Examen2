<?php

// solicitar los archivos "articulo.php", "bebida.php", "pizza.php";
require("articulo.php");
require("bebida.php");
require("pizza.php");


// Inicialización de los artículos
$articulos = [
    new Articulo("Lasagna", 3.50, 7.00, 20),
    new Articulo("Pan de ajo y mozzarella", 2.00, 4.50, 15),
    new Pizza("Pizza Margarita", 4.00, 8.00, 30, ["Tomate", "Mozzarella", "Albahaca"]),
    new Pizza("Pizza Pepperoni", 5.00, 10.00, 25, ["Tomate", "Mozzarella", "Pepperoni"]),
    new Pizza("Pizza Vegetal", 4.50, 9.00, 18, ["Tomate", "Mozzarella", "Verduras Variadas"]),
    new Pizza("Pizza 4 quesos", 5.50, 11.00, 20, ["Mozzarella", "Gorgonzola", "Parmesano", "Fontina"]),
    new Bebida("Refresco", 1.00, 2.00, 50, false),
    new Bebida("Cerveza", 1.50, 3.00, 40, true)
];

// Ejemplo de uso

mostrarMenu($articulos);
mostrarMasVendidos($articulos);
mostrarMasLucrativos($articulos);


function mostrarMenu($articulos) {
    foreach ($articulos as $articulo) {
        if ($articulo instanceof Pizza) {
            echo "{$articulo->nombre}<br>";
        }
    }

    foreach ($articulos as $articulo) {
        if ($articulo instanceof Bebida) {
            echo "{$articulo->nombre}<br>";
        }
    }
 
    foreach ($articulos as $articulo) {
        if (!($articulo instanceof Pizza) && !($articulo instanceof Bebida)) {
            echo "{$articulo->nombre}<br>";
        }
    }
}
 
function mostrarMasVendidos($articulos) {
    usort($articulos, function ($a, $b) {
        return $b->contador - $a->contador;
    });
 
    for ($i = 0; $i < 3; $i++) {
        echo "{$articulos[$i]->nombre} - Vendidos : {$articulos[$i]->contador}<br>";
    }
}
 
function mostrarMasLucrativos($articulos) {
    usort($articulos, function ($a, $b) {
        $beneficioA = ($a->precio - $a->coste) * $a->contador;
        $beneficioB = ($b->precio - $b->coste) * $b->contador;
 
        return $beneficioB - $beneficioA;
    });
    foreach ($articulos as $articulo) {
        $beneficio = ($articulo->precio - $articulo->coste) * $articulo->contador;
         echo "{$articulo->nombre} - Beneficio: {$beneficio}€<br>";
    }
}

include ('vista.php');