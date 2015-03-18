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
	
	
        <title>M2L - Liste des Formations</title>
    </head>


    <body>
    
	    
	    <div id="corpsSite">
	    
	    
	    <!-- Photo M2, entpête du site web -->
	   <?php include 'presentation.php';?>
	   <br><br>
	    
	    <?php 
    include_once 'DB.php';
    
    $liste = SelectAllFormation();
    
    ?>
    
    <table id="tableFormation">
    	<tr>
    	<td>idFormation</td>
    	<td>libelle</td>
    	<td>duree</td>
    	<td>organisme</td>
    	</tr>
    
    <?php
    
    foreach ($liste as $ligne)
    {
    	?>
    	
    	<tr>
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
	    
	    
	
    
    
    </body>



</html>