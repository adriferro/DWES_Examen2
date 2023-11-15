<?php
   echo "<h1>Nuestro menú</h1>";

   echo"<h2>Pizzas</h2>";
   echo $articulos[2];
   echo "<br>";
   echo $articulos[3];
   echo "<br>";
   echo $articulos[4];
   echo "<br>";
   echo $articulos[5];

   echo"<h2>Bebidas</h2>";
   echo $articulos[6];
   echo "<br>";
   echo $articulos[7];

   echo"<h2>Otros</h2>";
   echo $articulos[0];
   echo "<br>";
   echo $articulos[1];
   

   echo"<h2>Los más vendidos</h2>";
   echo mostrarMasVendidos($precio);
   

   echo"<h2>¡Los más lucrativos!</h2>";
   
   
