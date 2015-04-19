<?php session_start()?>
    
<!-- Cette page affiche la liste de tous les employés de la M2L
		Elle est réservée seulement au service RH qui gère les formations -->
			    
<div id="divFormation">

	<!-- Table listant tous les responsables-->
	<br>
	<h2>Liste de tous les Responsables</h2>
	<table>
		<thead>
			<tr>
				<td>Nom Prénom</td>
				<td>Service</td>
			</tr>
	    </thead>
	    <?php
	    	$liste = ListeResponsableRH();
    		foreach ($liste as $ligne) { ?>
    	<tr>
    		<td>
    			<?php
    			$idEmploye=$ligne['idUtilisateur'];
    			echo "<a id=\"lienEmploye\" href=formationsEmploye.php?id=$idEmploye>".$ligne['nom']." ".$ligne['prenom']."</a>"; ?>
    		</td>
    		<td><?php echo $ligne['Service']; ?></td>
    	</tr>
    	<?php } ?>
	</table>
	<br>
	
	<!-- Table listant tous les salariés-->
	<br>
	<h2>Liste de tous les Salariés</h2>
	<table>
		<thead>
			<tr>
				<td>Nom Prénom</td>
				<td>Service</td>
			</tr>
	    </thead>
	    <?php
	    	$liste = ListeSalarieRH();
    		foreach ($liste as $ligne) { ?>
    	<tr>
    		<td>
    			<?php
    			$idEmploye=$ligne['idUtilisateur'];
    			echo "<a id=\"lienEmploye\" href=formationsEmploye.php?id=$idEmploye>".$ligne['nom']." ".$ligne['prenom']."</a>"; ?>
    		</td>
    		<td><?php echo $ligne['Service']; ?></td>
    	</tr>
    	<?php } ?>
	</table>
	
	<?php if ($_SESSION['Service'] == "Ressources Humaines") {?>
			<div id="ajoutForma">
				<form action="FormulaireAjoutFormation.php">
					<input type="submit" value="Ajouter une formation">
				</form>
			</div>
				<?php }?>  
</div>
