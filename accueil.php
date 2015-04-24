<?php
session_start();
include_once 'connexion.php';
?>

<!-- Page d'acueil du site Web de la maison des ligues avec
	- soit un formulaire de connexion si aucune cession n'est active
	- Soit le menu avec les onglets permettant la navigaton sur le site -->
	
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>La Maison des Ligues de Lorraine</title>
    </head>

    <body>
    
    	<div id="corpsSite">
	    
		   <!-- Inclusion de presentation.php - entpête du site web avec la photo M2L -
		   		La condition IF permet d'insérer le menu avec les différents onglets de navigation pour une cession ouverte
		   		ou le formulaire de connexion si aucune cession n'est ouverte -->
		   
		   <?php
		   if ($_SESSION['test'] == 1)
		   {include 'presentation/presentationConnectee.php';}
		   else
		   {include 'presentation/presentation.php';} ?>
		   
		    
		    <!-- Présentation de la maison des ligues -->
		    
		    <div id="text">
		    	
		    	<h1 id="titreText">Présentation de la Maison des Ligues</h1>
			    
			    <p>Une maison au service du sport! En décidant en 2000 de l'acquisition et la réhabilitation de la Maison Régionale des Sports de Lorraine à Tomblaine, la région Lorraine a voulu répondre à des besoins de structuration du mouvement sportif lorrain, qui représente aujourd'hui 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.</p>
			    <p>Véritable lieu de vie, cette Maison propose aux Ligues et Comités, des locaux fonctionnels situés à l'est de Nancy, permettant ainsi aux dirigeants, aux bénévoles et aux salariés d'échanger, de partager, de se former et de se regrouper dans des conditions optimales. Ce sont ici plus de 3 550 clubs lorrains, toutes disciplines confondues, qui bénéficient de cet outil. Un tel établissement est à la fois un facteur fort de cohésion et de qualité du sport régional.</p>
			    <p>Il a pour vocation d'héberger les structures sportives régionales, de leur fournir des services administratifs, comptables et juridiques. Entièrement financée par la région Lorraine, la Maison Régionale des Sports de Lorraine est gérée en partenariat par la région Lorraine et le Comité Régional Olympique et Sportif de Lorraine (CROSL) qui est l'initiateur d'une politique sportive régionale unitaire.</p>
			    
		    </div>
		    <?php include 'presentation/footer.php';?>
    	</div>
    
    </body>



</html>