<?php
session_start(); 
if ($_SESSION['test'] != 1)
{header('Location: accueil.php');}
?>

<!-- Cette page affiche les données personnelles de l'utilisateur connecté -->

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
		    
		    
		    <!-- Présentation des informations personnelles -->
		    
		    <h1 id="titreText">Ajouter une Formation</h1>
		    
		    <form method="post" action="formations.php" id="ajoutForma">
		    	Intitulé de la formation : <input type="text" placeholder="Nom" name="libelle" value="<?php echo isset($libelle)?$libelle:''?>"><br>
		    	Date : <input type="text" placeholder="aaaa-mm-jj" name="date" value="<?php echo isset($date)?$date:''?>"><br>
		    	Durée : <input type="text" placeholder="Durée en jour" name="duree" value="<?php echo isset($duree)?$duree:''?>"><br>
		    	Organisme : <input type="text" placeholder="Nom Organisme" name="organisme" value="<?php echo isset($organisme)?$organisme:''?>"><br>
		    	<input type="submit" value="Valider"> <input onclick="self.location.href='formations.php'" type="button" value="Annuler">
		    </form>
    		<?php include 'presentation/footer.php';?>
    	</div>
    
    </body>



</html>