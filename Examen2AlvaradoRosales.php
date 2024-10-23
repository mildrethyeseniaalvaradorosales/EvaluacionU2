<?php
/* CBTIS 89
Examen2AlvaradoRosales.php
Programa que almacena el precio de 5 articulos en arraglos calcula el IVA ,el subtotal ,calcula un descuento y los almacena en un nuevos arreglos y imprime los arreglos.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino */
$arrayPrecios=array(500,400,200,700,100);
$arrayIVA=array();
$arraySubtotal=array();
$arrayDescuentos=array();
$arrayTotal=array();

$longitud = count($arrayPrecios); 
for ($i = 0; $i < $longitud; $i++) {
    $arrayIVA[$i] = $arrayPrecios[$i] * 0.16;
    $arraySubtotal[$i] = $arrayPrecios[$i] + $arrayIVA[$i];
    $arrayDescuentos[$i] =$arraySubtotal[$i] *0.10;
    $arrayTotal[$i]=$arraySubtotal[$i]-$arrayDescuentos[$i];
}
echo "Arreglo Precios <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $arrayPrecios[$i];
       echo "<br>","<br>";
}
echo "Arreglo IVA<br>";
for ($i = 0; $i < $longitud; $i++) {
    echo   $arrayIVA[$i] ;
   echo "<br>","<br>";
}
echo "Arreglo Subtotal <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo  $arraySubtotal[$i];
    echo "<br>","<br>";
}
echo "Arreglo Descuentos <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $arrayDescuentos[$i];
       echo "<br>","<br>";
}
echo "Arreglo Total <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo  $arrayTotal[$i];
       echo "<br>","<br>";
}
?>
