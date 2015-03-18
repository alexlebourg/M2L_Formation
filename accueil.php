
<?php include_once 'connexion.php';?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">



	<link rel="stylesheet" href="style.css">
	
	
        <title>La Maison des Ligues de Lorraine</title>
    </head>


    <body>
    
	    
	    <div id="corpsSite">
	    
	   <!-- Photo M2, entpête du site web -->
	   
<header>
	    <p id="M2L">
		    <img src="M2L.png" alt="Photo non chargée" title="M2L">
	    </p>
	   </header>
	   
	   <!-- Menu du site -->
	    <nav id="menu">
		    
			    <div id="menuDivLog">
			    <form  method="post" action="accueil.php">
			    Connexion:
			    	<input type="text" name="login" placeholder="Pseudo" value="<?php echo isset($pseudo)?$pseudo:''?>"/>
					<input type="password" name="pwd"placeholder="Mot de Passe" value="<?php echo isset($pwd)?$pwd:''?>"/>
					<input type="submit" name="OK" value="Se Connecter">
				</form>
				<div id="connexion">
				<?php if (isset($MessageErreur))
					 	{ for($i=0; $i<count($MessageErreur); $i++ )
    						{
    						echo "- $MessageErreur[$i] ";
    						}
   					 	}
   				?>
   				</div>
				</div>
				
	    
	    </nav>
	    
	    <!-- Présentation de la maison des ligues -->
	    <div id="text">
		    
		    <h1 id="titreText">Présentation de la Maison des Ligues</h1>
		    <div>
		    <p>
			   Une maison au service du sport! En décidant en 2000 de l'acquisition et la réhabilitation de la Maison Régionale des Sports de Lorraine à Tomblaine, la région Lorraine a voulu répondre à des besoins de structuration du mouvement sportif lorrain, qui représente aujourd'hui 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.
		    </p>
		    <p>
Véritable lieu de vie, cette Maison propose aux Ligues et Comités, des locaux fonctionnels situés à l'est de Nancy, permettant ainsi aux dirigeants, aux bénévoles et aux salariés d'échanger, de partager, de se former et de se regrouper dans des conditions optimales. Ce sont ici plus de 3 550 clubs lorrains, toutes disciplines confondues, qui bénéficient de cet outil. Un tel établissement est à la fois un facteur fort de cohésion et de qualité du sport régional.
		    </p>
		    <p>
Il a pour vocation d'héberger les structures sportives régionales, de leur fournir des services administratifs, comptables et juridiques. Entièrement financée par la région Lorraine, la Maison Régionale des Sports de Lorraine est gérée en partenariat par la région Lorraine et le Comité Régional Olympique et Sportif de Lorraine (CROSL) qui est l'initiateur d'une politique sportive régionale unitaire.  
		    </p>
		    </div>
	    </div>
	    
    
    
    
    
    </div>
    
    </body>



</html>