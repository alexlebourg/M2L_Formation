<?php session_start(); 
if ($_SESSION['test'] != 1)
{header('Location: accueil.php');}
?>
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
	    
	   <?php include 'presentationConnectee.php';?>
	    
	    <!-- Présentation des informations personnelles -->
	    <div id="text">
		    
		    <h1 id="titreText">Vos informations:</h1>	
	    </div>
    <div id="tableInfo">
    <table id="info">
	    <tr>
		    <td id="td1">Dénomination sociale de l'entreprise</td>
		    <td id="td2">Maison des Ligues de Lorraine</td>
	    </tr>
	    <tr>
		    <td id="td1">Siret</td>
		    <td id="td2">265.618.638.00106</td>
	    </tr>
	    <tr>
		    <td id="td1">Code APE</td>
		    <td id="td2">3286A</td>
	    </tr>
	    <tr>
		    <td id="td1">Représentée par</td>
		    <td id="td2">Fabienne Lepic</td>
	    </tr>
	    <tr>
		    <td id="blanc"><br></td>
		    <td id="blanc"><br></td>
	    </tr>
	    <?php
	    	$liste = SelectUtilisateur();
    foreach ($liste as $ligne)
    {
    	?>
	    <tr>
		    <td id="td1">Nom du salarié</td>
		    <td id="td2"><?php echo $ligne['nom'];?></td>
	    </tr>
	    <tr>
		    <td id="td1">Prénom du salarié</td>
		    <td id="td2"><?php echo $ligne['prenom'];?></td>
	    </tr>
	    <tr>
		    <td id="td1">Fonction</td>
		    <td id="td2"><?php echo $ligne['fonction'];?></td>
	    </tr>
	    <tr>
		    <td id="td1">Date d'entrée dans l'entreprise</td>
		    <td id="td2"><?php echo $ligne['dateEntreeEntreprise'];?></td>
	    </tr>
	    <?php } ?>
    </table>
    </div>
    
    
    </div>
  
    	
    
    </body>



</html>