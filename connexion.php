<?php

include_once 'DB.php';


$liste = VerifConnexion();
    

    foreach ($liste as $ligne)
    {
    	?>
            	<td>
            	<?php
            	$motDePasse = $ligne['motDePasse'];
            	?>
            	</td>
            	<?php
     }



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$MessageErreur= array();
	
	if (!empty($_POST['login']))
	{
		$pseudo = $_POST['login'];
	}
	else
	{
		array_push($MessageErreur, "Identifiant incorrect");
	}
	
	if (!empty($_POST['pwd']) && md5($_POST['pwd']) === $motDePasse)
	{
		$pwd = $_POST['pwd'];
	}
	else
	{
		array_push($MessageErreur, "Mot de passe incorrect");
	}
	
	if (isset($pseudo) && isset($pwd))
	{
		header('Location: http://localhost:8888/Annee%202/M2L/accueilConnectee.php');
	}
}




?>