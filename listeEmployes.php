<?php session_start()?>
    
	    
	    
	    
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
    foreach ($liste as $ligne)
    {
    	?>
    	
    	<tr>
    	<td>
    	
    	<?php
    	echo "<a href=formationsEmploye.php?idUtilisateur=".$ligne['idUtilisateur'].">".$ligne['nom']." ".$ligne['prenom']."</a>";
    	?>
    	</td>
    	</tr>
    	
    	<?php
    }
    
    ?>
			</table>
	    
    	</div>
    
    
    </div>
  
    	
    
    </body>



</html>