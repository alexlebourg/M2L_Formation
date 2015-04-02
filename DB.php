<?php



//Connexion à la BDD

function Connect()
{
		$user = 'root';
		$pass = 'root';
		$hote = 'localhost';
		$port = '8889';
		$base = 'M2L_Formation';
		$dsn="mysql:$hote;port=$port;dbname=$base";
		
		try
		{
			$dbh = new PDO($dsn, $user, $pass);
			$dbh->exec("SET CHARACTER SET utf8");
				
		}
		catch (PDOException $e)
		{
			die("Erreur! :" . $e->getMessage());
		}
		return $dbh;
}







//Select récupérant les données correspondant au pseudo renseigné afin de vérifier la correspondance et afficher les données correspondantes

function VerifConnexion(){
	//connection a la base
	$dbh = connect();
	$sql = "SELECT motDePasse, pseudo FROM Utilisateur WHERE pseudo = '".$_POST['login']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}


}

//Select récupérant les données de l'utilisateur connecté

function SelectUtilisateur(){
	//connection a la base
	$dbh = connect();
	$sql = "SELECT * FROM Utilisateur WHERE pseudo = '".$_SESSION['pseudo']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}


}


function Responsable()
{
	//Connection à la base
	$dbh = connect();
	$sql="select * from Responsable, Utilisateur WHERE Responsable.idUtilisateur = Utilisateur.idUtilisateur AND Utilisateur.idUtilisateur = (SELECT idUtilisateur FROM Utilisateur Where Utilisateur.pseudo = '".$_SESSION['pseudo']."')";
	$query  =  $dbh->query($sql);

	if ($query)
	{
		return  $query->fetchAll();
	}
	else
	{
		return false;
	}

}



function Formation(){
	//connection a la base
	$dbh = connect();
	$sql = "SELECT * FROM Formation, Faire WHERE Formation.idFormation = Faire.idFormation AND Faire.idUtilisateur = (SELECT idUtilisateur FROM Utilisateur Where Utilisateur.pseudo = '".$_SESSION['pseudo']."')";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}


}



//Select qui retourne un array associatif de la table Faire




//Select qui retourne la liste des employés du service du responsable connecté

function ListeEmployes()
{
	//Connection à la base
	$dbh = connect();
	$sql="SELECT * FROM Utilisateur WHERE Utilisateur.idUtilisateur IN (SELECT idUtilisateur FROM Salarie Where Salarie.Service = '".$_SESSION['Service']."') ORDER BY nom";
	$query  =  $dbh->query($sql);

	if ($query)
	{
		return  $query->fetchAll();
	}
	else
	{
		return false;
	}

}

?>	