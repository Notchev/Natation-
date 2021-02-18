//Effacer les lignes d'Article et Article Vetement
//Changer dans Type Quantite Dispo Quantite Vendue
//Rajouter une ligne dans la table Commande avec IDAcheteur ou Login? Prix ? Nombre d'Articles

//Need le => ID Categorie + ID Article + Quantité(name=choix quantite) + ID Type et ID Categorie + ID Article Vetement + ID TYPE pour les 2 premières lignes

//faire un tableau:
IDCategorie IDType IDArtcile quantite

<?php
  session_start();

  $database = "Projet";
    
  $db_handle = mysqli_connect('localhost', 'root', 'root' );
  $db_found = mysqli_select_db($db_handle, $database);

     $_SESSION['PanierQuantite']=array();
  
for( $i=0 ; $i < sizeof($_SESSION['PanierCategorie']) ; $i++ ){
 	
 	if ($_SESSSION['PanierCategorie'][$i] != 4)
 	{
 		$quantite= "quantite" . $i;
 		array_push($_SESSION['PanierQuantite'], $_POST[$quantite]);
 	}
 	else
 	{
 		array_push($_SESSION['PanierQuantite'], 1);
 	}

}

$_SESSION['PanierPrix'] = $_POST['result'];

header('Location: http://localhost:8888/Natation-/Natation-/Template/Connexion_panier.php'); 

    ?>
