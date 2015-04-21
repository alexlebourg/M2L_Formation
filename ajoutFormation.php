<?php
session_start();
include_once 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (!empty($_POST['libelle']))
	{
		$_SESSION['libelle'] = $_POST['libelle'];
	}
	if (!empty($_POST['duree']))
	{
		$_SESSION['duree'] = $_POST['duree'];
	}
	if (!empty($_POST['organisme']))
	{
		$_SESSION['organisme'] = $_POST['organisme'];
	}
}

AjoutFormation();

$_SESSION['ajout']="1"
?>
