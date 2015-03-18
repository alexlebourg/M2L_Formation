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
	
	
        <title>M2L - Liste des Utilisateurs</title>
    </head>


    <body>
    
	    
	    <div id="corpsSite">
	    
	    
	    <!-- Photo M2, entpête du site web -->
	   <?php include 'presentation.php';?>
	   <br><br>
	    
	    <?php 
    include_once 'DB.php';
    
    $liste = SelectAllUtilisateur();
    
    ?>
    
    <table id="tableFormation">
    	<tr>
    	<td>id</td>
    	<td>nom</td>
    	<td>prénom</td>
    	<td>mail</td>
    	<td>fonction</td>
    	<td>date entrée entreprise</td>
    	<td>pseudo</td>
    	<!-- <td>mot de passe</td> -->
    	<td>nombre DIF</td>
    	<td>DIF utilisée</td>
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
    	echo $ligne['prenom'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['mail'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['fonction'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['dateEntreeEntreprise'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['pseudo'];
    	?>
    	</td>
    	<!--<td>
    	<?php
    	//echo $ligne['motDePasse'];
    	?>
    	</td> -->
    	<td>
    	<?php
    	echo $ligne['nbrDIF'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['DIFUtilisee'];
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