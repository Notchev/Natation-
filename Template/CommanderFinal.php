
<?php
  session_start();

  $database = "Projet";
    
  $db_handle = mysqli_connect('localhost', 'root', 'root' );
  $db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
   
  
for( $i=0 ; $i < sizeof($_SESSION['PanierCategorie']) ; $i++ ){

	$idtype= $_SESSION['PanierType'][$i];
 	$quantitetype = $_SESSION['PanierQuantite'][$i];

 	if ($_SESSION['PanierCategorie'][$i] != 4)
 	{
 		
 		$sql = "SELECT * FROM Article WHERE IDType= $idtype";
 		$result= mysqli_query($db_handle, $sql);
 		for ($j=0; $j< $_SESSION['PanierQuantite'][$i]; $j++)
 		{
 			$data = mysqli_fetch_assoc($result);
 			$idarticle = $data['ID'];
 			
 			$sql= "DELETE FROM Article WHERE ID=$idarticle";
 			mysqli_query($db_handle, $sql);
 		}
 		
 	}
 	else
 	{
 		$idarticle = $_SESSION['PanierArticle'][$i];
 		echo $idarticle;
 		$sql = "DELETE FROM ArticleVetement WHERE ID=$idarticle";
 		mysqli_query($db_handle, $sql);

 	}

 		$sql= "UPDATE Type SET QuantiteDispo= (QuantiteDispo - $quantitetype) WHERE ID=$idtype";
		mysqli_query($db_handle, $sql);
		$sql= "UPDATE Type SET QuantiteVendue= (QuantiteVendue + $quantitetype) WHERE ID=$idtype";
		mysqli_query($db_handle, $sql);
 		//header('Location: http://localhost:8888/Natation-/Natation-/Template/Index.php'); 

}
}




    ?>

    