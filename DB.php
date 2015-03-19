<?php
session_start();
mysql_query("SET NAMES 'utf8'");

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

//Select qui retourne un array associatif de la table Utilisateur

function SelectAllUtilisateur()
{
	//Connection à la base
	$dbh = connect();
	$sql="select * from Utilisateur ";
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

//Select qui retourne un array associatif de la table Formations

function SelectAllFormation()
{
	//Connection à la base
	$dbh = connect();
	$sql="select * from Formation ";
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

//Select qui retourne un array associatif de la table Responsable

function SelectAllResponsable()
{
	//Connection à la base
	$dbh = connect();
	$sql="select * from Responsable, Utilisateur Where Responsable.idUtilisateur=Utilisateur.idUtilisateur ";
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


//Select qui retourne un array associatif de la table Salariés

function SelectAllSalarie()
{
	//Connection à la base
	$dbh = connect();
	$sql="select * from Salarie, Utilisateur Where Salarie.idUtilisateur=Utilisateur.idUtilisateur ";
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

//Select qui retourne un array associatif de la table Faire

function SelectAllFaire()
{
	//Connection à la base
	$dbh = connect();
	$sql="select * from Faire, Utilisateur, Formation Where Faire.idUtilisateur=Utilisateur.idUtilisateur AND Faire.idFormation=Formation.idFormation Order by dateFormation";
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