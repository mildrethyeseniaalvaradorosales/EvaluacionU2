<?php
/* CBTIS 89
Examen2AlvaradoRosales.php
//Programa que almacena el precio de 5 articulos
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino */
$arrayPrecios=array(500,400,200,700,100);
$arrayIVA=array(0.16);
$arraySubtotal=array();
$arrayDescuentos=array(0.10);
$arrayTotal=array();
$longitud = count($arrayPrecios); 
for ($i = 0; $i < $longitud; $i++) {
$arrayPrecios[$i]=$arrayPrecios[$i]*$arrayIVA[$i];
$arraySubtotal=$arrayPrecios[$i]-$arrayIVA[$i];
$arrayDescuentos=$arraySubtotal[$i]*$arrayDescuentos[$i];}
echo "Arreglo Precios:".count($arrayPrecios);
echo "Arreglo IVA:".count($arrayIVA);
echo "Arreglo Subtotal:".count($arraySubtotal);
echo "Arreglo Descuentos:".count($arrayDescuentos);
echo "Arreglo Precios:".count($arrayPrecios);
echo "Arreglo Total:".count($arrayTotal);
?>