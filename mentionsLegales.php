
<?php 

include_once 'connexion.php';
session_start();
?>
<!-- Page d'acueil du site Web de la maison des ligues avec
	- soit un formulaire de connexion si aucune cession n'est active
	- Soit le menu avec les onglets permettant la navigaton sur le site -->
	
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Mentions Légales</title>
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
		    	
		    	<h1 id="titreText">Mentions Légales</h1>
			    
					<p>Le service des Ressources Humaines dispose de moyens informatiques destinés à gérer les formations des emplyés.</p>
					<p>Les informations enregistrées sont réservées à l’usage du service concerné et ne peuvent être communiquées qu’aux destinataires suivants :
						<br><i>- Service Ressources Humaines
						<br>- Service Paie
						<br>- Responsable de la ligue de l'employé</i></p>
					
					<p>Aucune donnée n'est transmise en dehors de services susnommés. Toutes les garanties nécessaires ont été prises pour s’assurer d’un niveau de protection suffisant des données personnelles.</p>
					
					<p>Ces informations sont nécessaires à notre société pour répondre aux demandes et aux attentes voulues.
					Elles sont enregistrées dans notre base salarié et peuvent donner lieu à l’exercice du droit d’accès et de rectification auprès de notre service des Ressources Humaines.</p>
					<p>Conformément aux articles 39 et suivants de la loi n° 78-17 du 6 janvier 1978 modifiée en 2004 relatives à l’informatique, aux fichiers et aux libertés, toute personne peut obtenir communication et, le cas échéant, rectification ou suppression des informations la concernant, en s’adressant au service des Ressources Humaines de la Maison des Ligues de Lorraine.</p>
							    
		    </div>
		    <?php include 'presentation/footer.php';?>
    	</div>
    
    </body>



</html>