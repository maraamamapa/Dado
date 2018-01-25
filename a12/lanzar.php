<?php
include ("a12.php");


$tirada1 = new jugadorDado();

for($i=1; $i<=12; $i++){ /*Quiero hacer 12 tiradas de dados, por lo tanto, establecemos un bucle que represente dichas tiradas*/
 // echo "Tirada".$i."<br>";/*Apuntamos y mostramos las tiradas numeradas, segun los numeros establecidos en el bucle,
							//cumplan la condicion, en este caso de 1 a 12*/
  $tirada1->tiraDado()."<br>";/*Mostramos el numero obtenido en las tiradas (azar)*/

 }

$tirada1->imprimirTiradas();

echo $tirada1->calcularMediaTiradas();
echo"Hola";
?>
