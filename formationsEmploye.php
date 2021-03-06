<?php
session_start(); 
if ($_SESSION['test'] != 1)
{header('Location: accueil.php');} 
$_SESSION['idEmploye']=$_GET['id'];
$_SESSION['afecteForma']=$_GET['aFo'];


include_once 'PHP/affecteFormation.php';
?>

<!-- Cette page affiche les informations pour un responsable d'un salarié du même service
		On y accède par un clic sur un salarié dans le tableau de la liste des employés de la page Formation d'un responsable -->

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
		    <?php include 'presentation/presentationConnectee.php';?>
		    
		    <!-- Inclusion de presentation.php, entpête du site web avec la photo M2L -->
		    <?php
		    if (!empty($_SESSION['ajout'])){
			    if ($_SESSION['ajout']==1){
			    		echo "<p id=\"ajoutOK\">La formation a été correctement ajoutée</p>";
			    		$_SESSION['ajout']=0;}
		    }?>
		    
		    <h2>Employé(e) :</h2>	
	
			<div id="divFormation">
		    	
		    	
		    	
		    	<!-- Information sur le salarié-->	    	
    			<table id="info">
					    <?php
					    	$liste = EmployeSelectionne();
					    	foreach ($liste as $ligne) { ?>
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
				<br>
	    		
	    		<!-- Table récapitulative des heures de DIF -->
	    		<br>
	    		<h2>Récapitulatif des heures de CPF (Compte Personnel de Formation)</h2>
		    	<table>
					<tr>
						<td id="td1">Nombre d'heures de CPF capitalisées en 2014</td>
						<td id="td2">20</td>
		    		</tr>
					<tr>
						<td id="td1">Nombres d'heures de CPF utilisées</td>
						<td id="td2"><?php $liste = EmployeSelectionne(); foreach ($liste as $ligne) { echo $ligne['DIFUtilisee'];}?></td>
		    		</tr>
					<tr>
						<td id="td1">Nombre d'heures de CPF disponibles</td>
						<td id="td2"><?php $liste = EmployeSelectionne(); foreach ($liste as $ligne) { echo $ligne['nbrDIF']-$ligne['DIFUtilisee'];}?></td>
		    		</tr>
		    	</table>
		    	<br>
	
		    <!-- Table des Formations -->
		    	<br>
		   		<h2>Liste des Formations effectuées</h2>
				<table id="tableFormation">
					<thead>
						<tr>
					    	<td id="tdFormation">Formations</td>
					    	<td id="tdDate">Date</td>
					    	<td id="tdDuree">Durée en jours</td>
					    	<td id="tdOrganisme">Organisme</td>
		    			</tr>
		    		</thead>
			    	<?php
			    	$liste = FormationEmploye();
		    		foreach ($liste as $ligne){ ?>
	    	
	    			<tr>
	    				<td>
	    					<?php echo $ligne['libelle'];?>
	    				</td>
	    				<td>
	    					<?php echo $ligne['dateFormation'];?>
	    				</td>
	    				<td>
	    					<?php echo $ligne['duree'];?>
	    				</td>
	    				<td>
	    					<?php echo $ligne['organisme'];?>
	    				</td>
	    			</tr>
	    			<?php } ?>
				</table>
							
				<?php if ($_SESSION['Service'] == "Ressources Humaines") {
						if (empty($_SESSION['afecteForma'])) {?>
							<div id="affecterForma">
								<form method="post" action="formationsEmploye.php?id=<?php echo $_SESSION['idEmploye']?>&aFo=1">
									<input type="submit" value="Affecter une Formation">
								</form>
							</div>
						<?php }
						else {?>
						<div id="affecterForma">
								<form method="post" action="formationsEmploye.php?id=<?php echo $_SESSION['idEmploye']?>&aFo=0">
									<select name="formationsListe" id="formationsListe">
										<?php $liste = AllFormation();
		    							foreach ($liste as $ligne) {?>
											<option  value="<?php echo $ligne['idFormation'] ?>"><?php echo $ligne['libelle'];?></option>
										<?php }?>
									</select>
									<input type="text" placeholder="date: aaaa-mm-jj" name="dateForma" value="<?php echo isset($dateForma)?$dateForma:''?>">
									<input type="submit" value="Valider">
									<input onclick="self.location.href='formationsEmploye.php?id=<?php echo $_SESSION['idEmploye']?>&aFo=0'" type="button" value="Annuler">
								</form>
						</div>
						<?php $_SESSION['dateForma']=$dateForma;
						$_SESSION['nomForma']=$nomForma;
						}?>
				
				<?php }?>
				
	    
    		</div>
			<?php include 'presentation/footer.php';?>
    	</div> 	
    
    </body>

</html>