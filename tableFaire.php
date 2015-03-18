<?php
	session_start();
?>



<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="style.css">
	
	
        <title>M2L - Liste des Formations Faites</title>
    </head>


    <body>
    
	    
	    <div id="corpsSite">
	    
	    
	    <!-- Photo M2, entpête du site web -->
	   <?php include 'presentation.php';?>
	   <br><br>
	    
	    <?php 
    include_once 'DB.php';
    
    $liste = SelectAllFaire();
    
    ?>
    
    <table id="tableFormation">
    	<tr>
    	<td>idUtilisateur</td>
    	<td>nom</td>
    	<td>idFormation</td>
    	<td>Libellé Formation</td>
    	<td>Date</td>
    	<td>Durée</td>
    	</tr>
    
    <?php
    
    foreach ($liste as $ligne)
    {
    	?>
    	
    	<tr>
    	<td>
    	<?php
    	echo $ligne['idUtilisateur'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['nom'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['idFormation'];
    	?>
    	</td>
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
    	</tr>
    	
    	<?php
    }
    
    ?>
    </table>
	   
	    </div>
	    
	    
	
    
    
    </body>



</html>