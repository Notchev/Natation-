
<?php

//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement
$cat= 4;
if ($db_found) {

    $sql = "SELECT * FROM Type WHERE IDCategorie= $cat";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)){

        echo "ID: " . $data['ID'] . '<br>';
        echo "Nom: " . $data['Nom'] . '<br>';
        echo "Description: " . $data['Description'] . '<br>';
        echo "<br>";
    }
}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle); 

