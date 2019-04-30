
<?php

//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement

$i = 1;

if ($db_found) {

for ($i=1; $i<5; $i++)
{
	$max=0;
	$ID=0;

    $sql = "SELECT * FROM Type WHERE IDCategorie=$i ";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)){

        
        if ($data['QuantiteVendue']>=$max)
        {
        	$ID=$data['ID'];
        	$max= $data['QuantiteVendue'];
        }
        
    }
      echo $max;
      echo $ID;

      $sql= "UPDATE Categorie SET IDBestSeller = $ID WHERE ID=$i";
 		$result = mysqli_query($db_handle, $sql);
}

}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle); 

