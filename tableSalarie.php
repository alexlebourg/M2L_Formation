<?php
	session_start();
?>


<!DOCTYPE html>

<html>

    <head>
        
        <meta http-equiv="Content-Type" content="text/html"; charset=UTF-8">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="style.css">
	
	
        <title>M2L - Liste des Salariés</title>
    </head>


    <body>
    
	    
	    <div id="corpsSite">
	    
	    
	    <!-- Photo M2, entpête du site web -->
	   <?php include 'presentation.php';?>
	   <br><br>
	    
	    <?php 
    include_once 'DB.php';
    
    $liste = SelectAllSalarie();
    
    ?>
    
    <table id="tableFormation">
    	<tr>
    	<td>idSalarie</td>
    	<td>nom</td>
    	<td>Service</td>
    	</tr>
    
    <?php
    
    foreach ($liste as $ligne)
    {
    	?>
    	
    	<tr>
    	<td>
    	<?php
    	echo $ligne['idSalarie'];
    	?>
    	</td>
    	<td>
    	<?php
    	echo utf8_decode ($ligne['nom']);
    	?>
    	</td>
    	<td>
    	<?php
    	echo $ligne['Service'];
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