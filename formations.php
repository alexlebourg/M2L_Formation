<?php
session_start(); 
if ($_SESSION['test'] != 1)
{header('Location: accueil.php');}

if (!empty($_POST['libelle']))
	include_once 'ajoutFormation.php';

?>

<!-- Cette page affiche les formations réalisées de l'utilisateur connecté -->
<!DOCTYPE html>

	<html>

    	<head>
        	<meta charset="utf-8">
        	<link rel="stylesheet" href="style.css">
        	<title>La Maison des Ligues de Lorraine</title>
    	</head>

    <body>
    	
    	<div id="corpsSite">
    		
    		<!-- Inclusion de presentation.php, entpête du site web avec la photo M2L -->
	     	<?php include 'presentation/presentationConnectee.php';?>
			
			<?php if ($_SESSION['ajout']==1){
		    	echo "<p id=\"ajoutOK\">La formation a été correctement ajoutée</p>";
		    	$_SESSION['ajout']=0;}?>

		    
		    <!-- Présentation des formations -->
	     
		 	<h1 id="titreText">Les formations:</h1>
		 
		 	<div id="divFormation">
		 	
		 		<h2>Récapitulatif des heures de CPF (Compte Personnel de Formation)</h2>
		 	
		 		<!-- Table récapitulative des heures de CPF -->

	    		<table>
					<tr>
						<td id="td1">Nombre d'heures de CPF capitalisées en 2014</td>
						<td id="td2">20</td>
		    		</tr>
					<tr>
						<td id="td1">Nombres d'heures de CPF utilisées</td>
						<td id="td2"><?php $liste = SelectUtilisateur(); foreach ($liste as $ligne) { echo $ligne['DIFUtilisee'];}?></td>
		    		</tr>
					<tr>
						<td id="td1">Nombre d'heures de CPF disponibles</td>
						<td id="td2"><?php $liste = SelectUtilisateur(); foreach ($liste as $ligne) { echo $ligne['nbrDIF']-$ligne['DIFUtilisee'];}?></td>
		    		</tr>
	    		</table>
	    	<br>
 
	    	<!-- Table des Formations - Affiche la table des formations effectuées par l'utilisateur connecté -->
	    
	    	<br>
		    <h2>Liste des Formations effectuées</h2>
				<table id="tableFormation">
					<thead>
						<tr>
					    	<td id="tdFormation">Formations</td>
					    	<td id="tdDate">Date</td>
					    	<td id="tdDuree">Durée en jours</td>
					    	<td id="tdOrganisme">Organisme</td>
		    			</tr>
		    		</thead>
			    	<?php
			    	$liste = Formation();
		    		foreach ($liste as $ligne) { ?>
		    		<tr>
		    			<td>
		    				<?php echo $ligne['libelle'];?>
		    			</td>
		    			<td>
		    				<?php echo $ligne['dateFormation'];?>
		    			</td>
		    			<td>
		    				<?php echo $ligne['duree'];?>
		    			</td>
		    			<td>
		    				<?php echo $ligne['organisme'];?>
		    			</td>
		    		</tr>
		    		<?php } ?>
				</table>
				<br>				

				<!-- Condition IF permettant d'afficher la liste des employés sous la responsabilité de l'utilisateur connecté
					si celui-ci est un responsable -->
				<?php 
				if ($_SESSION['Responsable'] == 1)
	    			include_once 'listeEmployes.php';
				if ($_SESSION['Service'] == "Ressources Humaines")
					include 'ressourcesHumaines.php';?>
	    	</div>
	    	<?php include 'presentation/footer.php';?>
	    </div>
	    
    </body>
    
</html>