<?php
function conex(){
$serveur = "localhost";
$usr= "user20";
$password = "whale";
$dbName= "mmp";

// attention add user et grant user on the table

$cnx = mysqli_connect($serveur, $usr, $password, $dbName);

$cnxo =  new mysqli($serveur, $usr, $password, $dbName);
mysqli_set_charset($cnx, "utf8");

return $cnx;
}
?>
