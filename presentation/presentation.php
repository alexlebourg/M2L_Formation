<?php
include_once 'DB.php';
session_start();
?>

<!-- Cette page est le menu présent sur la page d'accueil du site si aucune cession n'est active.
	Elle contient le formulaire de connexion -->
	
	<header>
	    <p id="M2L">
		    <img src="M2L.png" alt="Photo non chargée" title="M2L">
	    </p>
	</header>
	
	
	<!-- Menu du site -->
	    
	<nav id="menu">
		<div id="menuConnexion">
			<form  method="post" action="accueil.php">
				Connexion:
				<input type="text" name="login" placeholder="Pseudo" value="<?php echo isset($pseudo)?$pseudo:''?>"/>
				<input type="password" name="pwd" placeholder="Mot de Passe" value="<?php echo isset($pwd)?$pwd:''?>"/>
				<input type="submit" name="OK" value="Se Connecter">
			</form>
			<div id="connexion">
				<!-- Affichage des erreurs de connexion -->
				<?php if (isset($MessageErreur))
					{ for($i=0; $i<count($MessageErreur); $i++ )
    					{
    						echo "- $MessageErreur[$i] ";
    					}
					}?>
   			</div>
   		</div>
   	</nav>
	    