<?php
$serveur = "localhost";
$usr= "csa";
$password = "aform87";
$dbName= "mmp";

// attention add user et grant user on the table

$cnx = mysqli_connect($serveur, $usr, $password, $dbName);

$cnxo =  new mysqli($serveur, $usr, $password, $dbName);
mysqli_set_charset($cnx, "utf8");
?>
