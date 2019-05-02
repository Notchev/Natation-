<?php

session_start ();

$Categorie = isset ($_POST["Categorie"])? $_POST["Categorie"] : ""; 
$Nom = isset ($_POST["Nom"])? $_POST["Nom"] : ""; 
$Description = isset ($_POST["Description"])? $_POST["Description"] : ""; 
$Prix = isset ($_POST["Prix"])? $_POST["Prix"] : ""; 
$Quantite = isset ($_POST["Quantite"])? $_POST["Quantite"] : ""; 

$profil_name = $_FILES['Photo']['name'];
$profil_type = $_FILES['Photo']['type'];
$profil_tmp_name = $_FILES['Photo']['tmp_name'];
$profil_error = $_FILES['Photo']['error'];
$profil_size = $_FILES['Photo']['size'];
$type=substr($profil_type, strpos($profil_type,'/')+strlen('/'));//récupère le format du fichier ex:'png'
$photo_article='image/article/pa_'.$Categorie.$Nom. '.' .$type;
move_uploaded_file($profil_tmp_name, $photo_article);




//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement

if ($Categorie == "Livres")
{
	$cat= 1;
}
else if ($Categorie == "Musique")
{
	$cat= 2;
}
else if ($Categorie == "Sports&Loisirs")
{
	$cat= 3;
}
else if ($Categorie == "Vetements")
{
	$cat= 4;
}

if ($db_found) {

	echo $Nom . $Description . $Prix . $Quantite . $cat . $photo_article; 
	$id= $_SESSION ['ID'];
	echo $id; 

    $sql = "INSERT INTO Type (Nom,Description,Prix,QuantiteDispo, QuantiteVendue, IDVendeur, IDCategorie, Photo) VALUES ('$Nom', '$Description', $Prix , $Quantite, 0, $id, $cat,'$photo_article')";
mysqli_query($db_handle, $sql);


header('Location: http://localhost:8888/Natation-/Natation-/Template/Interfacevendeurs.php'); 


    //end while
}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);

?>