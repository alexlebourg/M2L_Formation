<?php
session_start();
include_once 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (!empty($_POST['dateForma']))
	{
		$_SESSION['dateForma'] = $_POST['dateForma'];
		$_SESSION['idForma'] = $_POST['formationsListe'];
	}
	
}

AffecteFormation();
?>
