	<?php
	session_start();

	if( !$_SESSION['PanierCategorie'] ){
      
      $_SESSION['PanierCategorie']=array();
      $_SESSION['PanierType']=array();
      $_SESSION['PanierArticle']=array();
      
    }

	
	$database = "Projet";
	$db_handle = mysqli_connect('localhost', 'root', 'root' );
	$db_found = mysqli_select_db($db_handle, $database);

	$ID = isset ($_POST["ID"])? $_POST["ID"] : ""; 
	$IDCategorie = isset ($_POST["IDCategorie"])? $_POST["IDCategorie"] : "";

	if($IDCategorie == 4){
		$Taille = isset ($_POST["taille"])? $_POST["taille"] : ""; //if-then-else (si vrai : $nom = $_POST["nom"] si faux : "")
		$Genre = isset ($_POST["GenreChoisi"])? $_POST["GenreChoisi"] : ""; //if-then-else
		$Couleur =  isset ($_POST["CouleurChoisi"])? $_POST["CouleurChoisi"] : ""; //if-then-else


		$sql = "SELECT * FROM ArticleVetement WHERE ( IDType = $ID AND Modele = '$Genre' AND Taille = $Taille AND Couleur='$Couleur')" ;
		$result = mysqli_query($db_handle, $sql);
		$data = mysqli_fetch_assoc($result);

		if(in_array($data[ID] , $_SESSION['PanierArticle'])){

		}else{
			array_push($_SESSION['PanierArticle'], $data[ID] );
			array_push($_SESSION['PanierCategorie'], $IDCategorie);
			array_push($_SESSION['PanierType'], $ID);
		}

	}else{

		if(in_array($ID , $_SESSION['PanierType'])){
			
		}else{
			
			array_push($_SESSION['PanierArticle'], 0);
			array_push($_SESSION['PanierCategorie'], $IDCategorie);
			array_push($_SESSION['PanierType'], $ID);
		}
		
	}


	

	header('Location: Livres.php'); 


	?>