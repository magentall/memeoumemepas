<?php
include('login.php');

	function mySqli() {
		try {

			$bdd = new PDO('mysql:host=localhost;dbname=BDD_BLOG;charset=utf8', getUser(), getMdp());
			return $bdd;
		}
		catch(Exception $e){

	    	die('Erreur : '.$e->getMessage());
		}
	}

/*
$textht = $_POST['textht'];
echo $textht;
$textbas = $_POST['textbas'];
echo $textbas;
*/
?>
