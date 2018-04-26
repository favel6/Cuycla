<?php

echo '<br>Llegada a $Conex<br>';
$username='popo';
$password='Cachipay1';
//$password=$_GET['password'];
$servidor = 'localhost';
$dbnombre = 'cuycla';
echo "Mensaje enviado desde conex<br>";
$conex = new mysqli($servidor,$username,$password,$dbnombre);//or die ("#1 La cagamos en la coneccion <br><br><br>Error: ".mysql_error());
if($conex->connect_errno>0) {die ('Mensaje de cuycla_x, Fue imposible conectarse');} 
//if($conex->connect_errno>0) {die("Fue imposible conectarse ".$conex->connect_error);} 
//echo "Conection Exitosa<br>";
echo '<br>Salida de $Conex CON EXITO<br>';

?>