<?php

session_start ();

$Prenom = isset ($_POST["Prenom"])? $_POST["Prenom"] : ""; 
$Nom = isset ($_POST["Nom"])? $_POST["Nom"] : ""; 
$Email = isset ($_POST["Email"])? $_POST["Email"] : ""; 
$Login = isset ($_POST["Login"])? $_POST["Login"] : ""; 
$Mdp = isset ($_POST["Mdp"])? $_POST["Mdp"] : ""; 

$profil_name = $_FILES['Photo']['name'];
$profil_type = $_FILES['Photo']['type'];
$profil_tmp_name = $_FILES['Photo']['tmp_name'];
$profil_error = $_FILES['Photo']['error'];
$profil_size = $_FILES['Photo']['size'];
$type=substr($profil_type, strpos($profil_type,'/')+strlen('/'));//récupère le format du fichier ex:'png'
$photo_vendeur='image/vendeur/pv_'.$Login.$ID. '.' .$type;
move_uploaded_file($profil_tmp_name, $photo_vendeur);

$profil_name = $_FILES['Fond']['name'];
$profil_type = $_FILES['Fond']['type'];
$profil_tmp_name = $_FILES['Fond']['tmp_name'];
$profil_error = $_FILES['Fond']['error'];
$profil_size = $_FILES['Fond']['size'];
$type=substr($profil_type, strpos($profil_type,'/')+strlen('/'));//récupère le format du fichier ex:'png'
$photo_fond='image/vendeur/pf_'.$Login.$ID. '.' .$type;
move_uploaded_file($profil_tmp_name, $photo_fond);


//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement


if ($db_found) {

	echo $Email . $Login . $Mdp . $Nom . $Photo . $Fond . $Prenom ; 
	$id= $_SESSION ['ID'];
	echo $id; 

    $sql = "INSERT INTO Vendeur (Email,Login,Mdp,Nom, Photo, Fond, Prenom) VALUES ('$Email', '$Login', '$Mdp' , '$Nom', '$photo_vendeur', '$photo_fond', '$Prenom')";
mysqli_query($db_handle, $sql);


header('Location: http://localhost:8888/Natation-/Natation-/Template/Listevendeurs.php'); 


    //end while
}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);

?>