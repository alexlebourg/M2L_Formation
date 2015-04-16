<?php session_start()?>
    
<!-- Cette page est incluse dans la page "formations.php" si l'utilisateur connecté est un responsable -->	    
<div id="divFormation">

	<!-- Table listant les employés sous la resonsabilité du responsable connecté -->
	<br>
	<h2>Liste des Employés</h2>
	<table>
		<thead>
			<tr>
				<td>Nom Employés</td>
			</tr>
	    </thead>
	    <?php
	    	$liste = ListeEmployes();
    		foreach ($liste as $ligne) { ?>
    	
    	<tr>
    		<td>
    			<?php
    			$_SESSION['employe']=$ligne['idUtilisateur'];
    			echo "<a href=formationsEmploye.php>".$ligne['nom']." ".$ligne['prenom']."</a>"; ?>
    		</td>
    	</tr>
    	<?php } ?>
	</table>
	    
</div>
