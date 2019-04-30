<?php
 //declaration des variables
 $Login = isset ($_POST["Login"])? $_POST["Login"] : ""; //if-then-else (si vrai : $nom = $_POST["nom"] si faux : "")
 $Mdp = isset ($_POST["Mdp"])? $_POST["Mdp"] : ""; //if-then-else
 $erreur = "";

//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement
$user = "Vendeur";

if ($db_found) {

    $sql = "SELECT * FROM $user WHERE Login = '$Login'";
    $result = mysqli_query($db_handle, $sql);

	
    while ($data = mysqli_fetch_assoc($result)){

    	if ($Mdp == $data['Mdp'])
    	{
    		$erreur .= "";
    	}
    	else 
    	{
    		$erreur .= "Don't match";
    	}
    }

  if($erreur == "")
 	{
        ?>
        <a href="admin_accueil.php">Cliquer ici pour Continuer</a>
        <?php



 	}
 	else {
 		echo "Erreur: $erreur" ;
 	}

}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle); 


?>