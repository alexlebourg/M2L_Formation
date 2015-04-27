<?php
session_start();
?>


<!-- Page d'acueil du site Web de la maison des ligues avec
	- soit un formulaire de connexion si aucune cession n'est active
	- Soit le menu avec les onglets permettant la navigaton sur le site -->
	
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Besoin d'aide</title>
    </head>

    <body>
    
    	<div id="corpsSite">
	    
		   <!-- Inclusion de presentation.php - entpête du site web avec la photo M2L -
		   		La condition IF permet d'insérer le menu avec les différents onglets de navigation pour une cession ouverte
		   		ou le formulaire de connexion si aucune cession n'est ouverte -->
		   
		   <?php
		   if ($_SESSION['test'] == 1)
		   {include 'presentation/presentationConnectee.php';}
		   else
		   {include 'presentation/presentation.php';} ?>
		   
		    
		    <!-- Documentation du site -->
		    
		    <div id="textAide">
		    	
		    	<h1 id="titreText">Présentation du site</h1>
		    	
		    	
		    	<ol>
		    		<li><a id="lienEmploye" href="#conn">Connexion</a></li>
		    		<li><a id="lienEmploye" href="#navig">Menu</a></li>
		    		<li><a id="lienEmploye" href="#leg">Mentions Légales</a></li>
		    		<li><a id="lienEmploye" href="#formation">Accès aux formations</a></li>
		    		<li><a id="lienEmploye" href="#infoPerso">Accès aux informations personnelles</a></li>
		    		<li><a id="lienEmploye" href="#respon">Vous êtes responsable : Consultez les formations de vos employés</a></li>
		    		<li><a id="lienEmploye" href="#rh">Vous êtes au service RH : Gérez les formations</a>
		    			<ul><li><a id="lienEmploye" href="#ajout">Ajouter une formation</a></li>
		    				<li><a id="lienEmploye" href="#affecte">Affecter une formation à un employé</a></li>
		    			</ul>
		    		</li>
		    	</ol>
		    	
		    	<br><br>
		    	<p>
			    	<h2 id="conn">Connexion</h2>
			    	Pour vous connecter, entrer votre pseudo et votre mot de Passe. Cliquer sur <b>"Connexion"</b> ou taper "Enter"
				    <p ><img id="image" src="aideImage/Connexion.png" alt="Photo non chargée" title="Connexion.png"></p>
			    </p>
			    
			    <br><br>
			    <p>
			    	<h2 id="navig">Menu</h2>
			    	Le menu présente les principaux liens de navigation du site :
			    	<br><b>- Accueil :</b> renvoie à la page d'accueil
			    	<br><b>- Formations:</b> détail des heures de CPF et la liste des formations faites
			    	<br><b>- Compte :</b> regroupe les données personnelles de l'utilisateur
				    <p><img id="image" src="aideImage/Menu.png" width="80%" alt="Photo non chargée" title="Menu.png"></p>
			    </p>
			    <br><br>
			    <p>
				    <h2 id="leg">Mentions légales</h2>
				    Afin d'accéder aux mentions légales, cliquer sur le lien <b>"Mentions Légales"</b> au bas de la page
				    <p><img id="image" src="aideImage/Footer.png" width="90%" alt="Photo non chargée" title="Footer.png"></p>
			    </p>
			    <br><br>
			    <p>
				    <h2 id="formation">Formations</h2>
			    	Pour accéder à la liste de vos formations, cliquer sur <b>"Formations"</b> dans le menu.<br>
			    	Vous optiendrez en premier lieu le récapitulatif de votre Compteur Personnel de Formations (CPF) :
			    	<p><img id="image" src="aideImage/RecapCPF.png" alt="Photo non chargée" title="RecapCPF.png"></p>
			    	Puis la liste de vos formations effectuées :
				    <p><img id="image" src="aideImage/ListeFormations.png" width="80%"  alt="Photo non chargée" title="ListeFormations.png"></p>
			    </p>
			    
			    <p>
				    <h2 id="infoPerso">Informations Personnelles</h2>
			    	Pour accéder à vos informations personnelles, cliquer sur <b>"Compte"</b> dans le menu.<br>
			    	Vous optiendrez un premier tableau avec le récapitulatif de votre entreprise et votre représentant puis les informations vous concernant :
			    	<p><img id="image" src="aideImage/DonneesPerso.png" alt="Photo non chargée" title="DonneesPerso.png"></p>
		    	</p>
			    <br><br>
			    <p>
			    	<h2 id="respon">Consultation des formations de vos employés</h2>
			    	Etant responsable de votre service, vous avez accès à la lecture des formations de vos employés.
			    	<br>Pour cela, aller dans la rubrique de vos formations, sous les deux premiers tableaux récapitulant vos données de formations, un affichage supplémentaire présente les employés sous votre responsabilité :
			    	<p><img id="image" src="aideImage/ListeEmployeResponsable.png" alt="Photo non chargée" title="ListeEmployeResponsable.png"></p>
			    	Cliquer sur un employé et vous optiendrez le détail de celui-ci : ces informations, le récaptulatif des CPF et la liste de ses foramtions
			    	<p><img id="image" src="aideImage/DetailEmploye.png" height="90%" width="90%" alt="Photo non chargée" title="DetailEmploye.png"></p>
		    	</p>
		    	<br><br>
			    <p>
			    	<h2 id="rh">Service Ressources Humaines</h2>
			    	Etant au service des Ressources Humaines, vous devez gérer les demandes de formations. Vous avez donc accès aux formations de tous les employés.
			    	Pour les consulter, aller dans la rubrique de vos formations, sous les deux premiers tableaux récapitulant vos données de formations, un affichage supplémentaire présente la liste de tous les employés en 2 catégories (salariés et responsabes) :
			    	<p><img id="image" src="aideImage/ListeEmployesRH.png" alt="Photo non chargée" title="ListeEmployesRH.png"></p>
			    	<p>
			    		<h2 id="ajout">Ajouter une formation</h2>
			    		Au bas de la page, au-dessous des listes listes d'employé, vous trouverez la rubrique ajouter une formation.
			    		<p><img id="image" src="aideImage/BoutonAjoutForma.png" alt="Photo non chargée" title="ListeEmployesRH.png"></p>
			    		Cliquer sur "Nouvelle Formation". Vous serez redirigé vers le formulaire d'ajout : 
			    		<p><img id="image" src="aideImage/FormulaireAjoutFormation.png" alt="Photo non chargée" title="FormulaireAjoutFormation.png"></p>
			    		Validez, la formation est ajoutée.
			    	</p>
			    	<p>
			    		<h2 id="affecte">Affecter une formation à un employé</h2>
			    		Pour affecter une formation à un employé, celle-ci doit déjà exister. Dans le cas contraire, entrez la formation en suivant les instructions de la rubrique "<a id="lienEmploye" href="#ajout"<i><u>Ajouter une formation</u></i></a>".
			    		<br>Ensuite, allez sur la page de l'employé souhaité. Pour celà, cliquez sur un nom dans la liste. Au bas de la page, sous les informations de l'employé, cliquez sur "Affecter une formation". Le formulaire suivant s'affiche :
			    		<p><img id="image" src="aideImage/AffecteFormation.png" alt="Photo non chargée" title="AffecteFormation.png"></p>
			    		Selectionnez la formation dans la liste, entrez la date, puis validez.<br>La formation a été affectée à l'employé.
			    	</p>
			    	
			    
			    </p>
		    </div>
		    <?php include 'presentation/footer.php';?>
    	</div>
    
    </body>



</html>