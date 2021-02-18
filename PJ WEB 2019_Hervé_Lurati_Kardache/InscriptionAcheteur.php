<?php




$Prenom = isset ($_POST["Prenom"])? $_POST["Prenom"] : ""; 
$Nom = isset ($_POST["Nom"])? $_POST["Nom"] : ""; 
$inputEmail = isset ($_POST["inputEmail"])? $_POST["inputEmail"] : ""; 
$Login = isset ($_POST["Login"])? $_POST["Login"] : ""; 
$inputPassword = isset ($_POST["inputPassword"])? $_POST["inputPassword"] : ""; 
$inputConfirmPassword = isset ($_POST["inputConfirmPassword"])? $_POST["inputConfirmPassword"] : ""; 
$inputadress = isset ($_POST["inputadress"])? $_POST["inputadress"] : ""; 
$inputadress2 = isset ($_POST["inputadress2"])? $_POST["inputadress2"] : ""; 
$inputville = isset ($_POST["inputville"])? $_POST["inputville"] : ""; 
$inputcodepostale = isset ($_POST["inputcodepostale"])? $_POST["inputcodepostale"] : ""; 
$inputpays = isset ($_POST["inputpays"])? $_POST["inputpays"] : ""; 
$inputel = isset ($_POST["inputel"])? $_POST["inputel"] : ""; 
$inputtypecarte = isset ($_POST["inputtypecarte"])? $_POST["inputtypecarte"] : ""; 
$inputnumerocarte = isset ($_POST["inputnumerocarte"])? $_POST["inputnumerocarte"] : ""; 
$inputdate = isset ($_POST["inputdate"])? $_POST["inputdate"] : ""; 
$inputnomcarte = isset ($_POST["inputnomcarte"])? $_POST["inputnomcarte"] : ""; 
$inputcrypto = isset ($_POST["inputcrypto"])? $_POST["inputcrypto"] : ""; 


$profil_name = $_FILES['photo_profil']['name'];
$profil_type = $_FILES['photo_profil']['type'];
$profil_tmp_name = $_FILES['photo_profil']['tmp_name'];
$profil_error = $_FILES['photo_profil']['error'];
$profil_size = $_FILES['photo_profil']['size'];
$type=substr($profil_type, strpos($profil_type,'/')+strlen('/'));//récupère le format du fichier ex:'png'
$photo_profil ='image/upload/pp_'.$Login.'_Acheteur.'.$type;
move_uploaded_file($profil_tmp_name, $photo_profil);




//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement
if ($db_found) {

    $sql = "INSERT INTO Acheteur(Nom,Prenom,Adresse1, Adresse2, Ville, CodePostal, Pays, Email, TypeCarte, Numero, DateCarte, Crypto, Login, Mdp, NumeroTel, Photo) VALUES ('$Nom', '$Prenom','$inputadress','$inputadress2','$inputville',$inputcodepostale,'$inputpays', '$inputEmail', '$inputtypecarte', $inputnumerocarte, '$inputdate' ,$inputcrypto, '$Login', '$inputPassword', $inputel, '$photo_profil')";
mysqli_query($db_handle, $sql);

    //end while
}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);

    header('Location: acheteur_login.php'); 

?>