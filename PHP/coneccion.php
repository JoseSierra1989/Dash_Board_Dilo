<?php 
$hots ="localhost";
$port ="5432";
$user ="postgres";
$pass ="Dilo2018*";
$db_name ="db_dilo";

$conne = "hots='$hots' port='$port' user='$user' pass='$pass' db_name='$db_name'";
$conn = pg_connect($conne) or die('No se ha podido conectar: ' . pg_last_error());
echo "Coneccion exitosa exitosa ";
 ?>
