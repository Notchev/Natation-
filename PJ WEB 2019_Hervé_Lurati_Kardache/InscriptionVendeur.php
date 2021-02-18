<?php

    

$Prenom = isset ($_POST["Prenom"])? $_POST["Prenom"] : ""; 
$Nom = isset ($_POST["Nom"])? $_POST["Nom"] : ""; 
$Email = isset ($_POST["Email"])? $_POST["Email"] : ""; 
$Login = isset ($_POST["Login"])? $_POST["Login"] : ""; 
$Password = isset ($_POST["Password"])? $_POST["Password"] : ""; 

$profil_name = $_FILES['photo_profil']['name'];
$profil_type = $_FILES['photo_profil']['type'];
$profil_tmp_name = $_FILES['photo_profil']['tmp_name'];
$profil_error = $_FILES['photo_profil']['error'];
$profil_size = $_FILES['photo_profil']['size'];
$type=substr($profil_type, strpos($profil_type,'/')+strlen('/'));//récupère le format du fichier ex:'png'
$photo_profil ='image/upload/pp_'.$Login.'_Vendeur.'.$type;
move_uploaded_file($profil_tmp_name, $photo_profil);

$profil_name = $_FILES['photo_profil']['name'];
$profil_type = $_FILES['photo_profil']['type'];
$profil_tmp_name = $_FILES['photo_profil']['tmp_name'];
$profil_error = $_FILES['photo_profil']['error'];
$profil_size = $_FILES['photo_profil']['size'];
$type=substr($profil_type, strpos($profil_type,'/')+strlen('/'));//récupère le format du fichier ex:'png'
$photo_couv ='image/upload/pc_'.$Login.'_Vendeur.'.$type;
move_uploaded_file($profil_tmp_name, $photo_couv);




//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement
if ($db_found) {

    $sql = "INSERT INTO Vendeur(Nom,Prenom,Email,Login, Mdp, Photo, Fond) VALUES ('$Nom', '$Prenom','$Email','$Login','$Password','$photo_profil','$photo_couv')";
mysqli_query($db_handle, $sql);


    //end while
}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);

    header('Location: vendeur_login.php'); 

?>