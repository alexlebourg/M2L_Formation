
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="style.css">
	
        <title>La Maison des Ligues de Lorraine</title>
    </head>


    <body>
	    
	    <div id="corpsSite">
	    
	    
	   <!-- Photo M2, entpête du site web -->
	   <?php include 'presentation.php';?>
	    
	    <!-- Présentation des formations -->
	    
	    
	    
	    <div id="text">
		    <h1 id="titreText">Les formations:</h1>	
	    </div>
	    
	    
	    
	    
		<div id="divFormation">
	    <h2>Récapitulatif des heures de DIF</h2>
	    <!-- Table récapitulative des heures de DIF -->
	    
    
	    	<table>
				<tr>
					<td id="td1">Nombre d'heures de DIF capitalisées en 2014</td>
					<td id="td2">20</td>
	    		</tr>
				<tr>
					<td id="td1">Nombres d'heures de DIF utilisées</td>
					<td id="td2"><?php $liste = VerifConnexion(); foreach ($liste as $ligne) { echo $ligne['DIFUtilisee'];}?></td>
	    		</tr>
				<tr>
					<td id="td1">Nombre d'heures de DIF disponibles</td>
					<td id="td2"><?php $liste = VerifConnexion(); foreach ($liste as $ligne) { echo $ligne['nbrDIF']-$ligne['DIFUtilisee'];}?></td>
	    		</tr>
	    	</table>
	    <br>
	    
	    
	    
	    <!-- Table des Formations -->
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
    foreach ($liste as $ligne)
    {
    	?>
    	
    	<tr>
    	<td>
    	
    	<?php
    	echo $ligne['libelle'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['dateFormation'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['duree'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['organisme'];
    	?>
    	</td>
    	</tr>
    	
    	<?php
    }
    
    ?>
			</table>
	    
    	</div>
    
    
    </div>
  
    	
    
    </body>



</html>