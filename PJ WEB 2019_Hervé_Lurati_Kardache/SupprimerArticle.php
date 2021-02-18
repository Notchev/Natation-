<?php

session_start ();
//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement

$IDArticlechoisi = isset ($_POST["IDArticlechoisi"])? $_POST["IDArticlechoisi"] : ""; 

$Idinterface= isset ($_POST["Idinterface"])? $_POST["Idinterface"] : ""; 
echo $Idinterface;

if ($db_found) {

    $sql = "DELETE FROM Type WHERE ID= $IDArticlechoisi  ";
    mysqli_query($db_handle, $sql);

}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection



mysqli_close($db_handle);


if ($Idinterface=="admin")
{
	header('Location: Listearticles.php'); 

}

else if ($Idinterface=="vendeur")
{
header('Location: InterfaceVendeurs.php'); 

}
