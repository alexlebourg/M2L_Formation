<?php

session_start();

include_once 'DB.php';



$liste = VerifConnexion();
    

    foreach ($liste as $ligne)
    {
    	?>
            	<td>
            	<?php
            	$motDePasse = $ligne['motDePasse'];
            	$_SESSION['pseudo'] = $ligne['pseudo'];
            	$_SESSION['motDePasse'] = $ligne['motDePasse'];
            	?>
            	</td>
            	<?php
     }

     
     $liste = SelectUtilisateur();
     
     
     foreach ($liste as $ligne)
     {
     	?>
                 	<td>
                 	<?php
                 	$_SESSION['prenom'] = $ligne['prenom'];
                 	$_SESSION['nom'] = $ligne['nom'];              	
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