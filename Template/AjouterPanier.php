<?php
session_start();
$user= $_SESSION['ID'];

 

 //declaration des variables
 $ID = isset ($_POST["ID"])? $_POST["ID"] : ""; //if-then-else (si vrai : $nom = $_POST["nom"] si faux : "")
 $IDCategorie = isset ($_POST["IDCategorie"])? $_POST["IDCategorie"] : ""; //if-then-else
 $Photo = isset ($_POST["Photo"])? $_POST["Photo"] : ""; //if-then-else
 $Prix = isset ($_POST["Prix"])? $_POST["Prix"] : ""; //if-then-else
 $QuantiteDispo = isset ($_POST["QuantiteDispo"])? $_POST["QuantiteDispo"] : ""; //if-then-else
 $Description = isset ($_POST["Description"])? $_POST["Description"] : ""; //if-then-else
$Nom = isset ($_POST["Nom"])? $_POST["Nom"] : ""; //if-then-else


array_push($_SESSION['PanierCategorie'], $IDCategorie);
array_push($_SESSION['PanierType'], $ID);

header('Location: http://localhost:8888/Natation-/Template/Livres.php'); 




//identifier le nom de base de données
// $database = "Projet";
// //connectez-vous dans votre BDD
// //Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
// $db_handle = mysqli_connect('localhost', 'root', 'root' );
// $db_found = mysqli_select_db($db_handle, $database);
// //si le BDD existe, faire le traitement


// if ($db_found) {
// 	 echo "coucou" ;
//  echo  $ID ; 
//  echo $IDCategorie ;
//  echo $Photo ;
//  echo $Prix ;
//  echo $Description ;
//  echo $QuantiteDispo ; 


//  $sql = "INSERT INTO Panier (Image, Prix, IDAcheteur, Quantite, IDType, Modele, Taille, Couleur,  Description, IDCategorie, Nom) VALUES ('$Photo', $Prix, $user, $QuantiteDispo, $ID, '0', 0, '0','$Description', $IDCategorie, '$Nom')" ; 
//     	$result= mysqli_query($db_handle, $sql);
      
    
// }//end if

// else 
//     { echo "Database null" ; 
// }


// mysqli_close($db_handle);
?>