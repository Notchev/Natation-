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





//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement
if ($db_found) {

    $sql = "INSERT INTO Acheteur(Nom,Prenom,Adresse1, Adresse2, Ville, CodePostal, Pays, Email, TypeCarte, Numero, DateCarte, Crypto, Login, Mdp) VALUES ('$Nom', '$Prenom','$inputadress','$inputadress2','$inputville',$inputcodepostale,'$inputpays', '$inputEmail', '$inputtypecarte', $inputnumerocarte, $inputdate,$inputcrypto, '$Login', '$inputPassword')";
mysqli_query($db_handle, $sql);
echo "coucou" . $Prenom . $Nom . $inputadress . $inputadress2 .$inputville.$inputcodepostale . $inputpays . $inputEmail . $inputtypecarte . $inputnumerocarte . $inputdate . $inputcrypto . $Login . $inputPassword;

$sql = "SELECT * FROM Acheteur";
    $result = mysqli_query($db_handle, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
        echo "ID: " . $data['ID'] . '<br>';
        echo "Prenom:" . $data['Prenom'] . '<br>';
        }


    //end while
}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);

?>