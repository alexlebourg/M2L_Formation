<?php session_start()?>
    
<!-- Cette page est incluse dans la page "formations.php" si l'utilisateur connecté est un responsable
		Elle affiche les informations des salariés du service du responsable connecté -->	    
		
<div id="divFormation">

	<!-- Table listant les employés sous la resonsabilité du responsable connecté -->
	<br>
	<h2>Liste des Employés de votre service</h2>
	<table>
		<thead>
			<tr>
				<td>Nom Prénom</td>
			</tr>
	    </thead>
	    <?php
	    	$liste = ListeEmployes();
    		foreach ($liste as $ligne) { ?>
    	
    	<tr>
    		<td>
    			<?php
    			$idEmploye=$ligne['idUtilisateur'];
    			echo "<a href=formationsEmploye.php?id=$idEmploye>".$ligne['nom']." ".$ligne['prenom']."</a>"; ?>
    		</td>
    	</tr>
    	<?php } ?>
	</table>
	    
</div>
