<?php

echo "blabla";
 //declaration des variables
 $Login = isset ($_POST["Login"])? $_POST["Login"] : ""; //if-then-else (si vrai : $nom = $_POST["nom"] si faux : "")
 $Mdp = isset ($_POST["Mdp"])? $_POST["Mdp"] : ""; //if-then-else
 $user = isset ($_POST["user"])? $_POST["user"] : "";
    $erreur=false;

session_start();

//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement


if ($db_found) {

    $sql = "SELECT * FROM $user WHERE Login = '$Login'";
    $result = mysqli_query($db_handle, $sql);

	
    while ($data = mysqli_fetch_assoc($result)){

    	if ($Mdp == $data['Mdp'])
    	{
    		$erreur = true;
            $_SESSION['Utilisateur']=$user;
            $_SESSION['ID']=$data['ID'];
            $_SESSION['Prenom']=$data['Prenom'];
            $_SESSION['Login']=$data['Login'];
            $_SESSION['Photo']=$data['Photo'];
           
    	}
    	else 
    	{
    		$erreur = false;

    	}
    }
}//end if


//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle); 

  if($erreur == true )
 	{   
    header('Location: panier_commande.php'); 
        
 	}
    else
    {
        header('Location: Connexion_panier.php'); 
    }

   

 




?>