<?php
include_once 'DB.php';

?>
<header>
		<!-- Image M2L de la présentation -->
	    <p id="M2L">
		    <img src="M2L.png" alt="Photo non chargée" title="M2L">
	    </p>
	   </header>
	   
	   <!-- Menu du site -->
	    <nav id="menu">
		    
			    <div id="menuDivAccueil"><a href="accueilConnectee.php">Accueil</a></div>
			    <div id="menuDivFormation"><a href="formations.php"id="menuF">Formations</a></div>
			    <div id="menuDivCompte"><a href="compte.php"id="menuC">Compte</a></div>
			    <div id="deconnexion"><a href="accueil.php"id="menuC">Se Déconnecter</a></div>
			    <div id="menuDivLog"><?php echo "Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom'];?></div>
				
	    
	    </nav>
	    
	    
	