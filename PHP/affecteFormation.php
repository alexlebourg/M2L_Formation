<?php
include_once 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (!empty($_POST['dateForma']))
	{
		$_SESSION['dateForma'] = $_POST['dateForma'];
		$_SESSION['idForma'] = $_POST['formationsListe'];
	}
	
}

AffecteFormation();


$listeCPF=CPF();
foreach ($listeCPF as $ligne)
{
	$_SESSION['CPF'] = $ligne['SommeCPF']*7;
}

CPFUtilise();

?>
