<!DOCTYPE html>
<html lang="en">

<head>


  <?php

 session_start();
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


?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Amazon ECE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css.css" rel="stylesheet" type="text/css"/>
    <link href="cssinscription.css" rel="stylesheet" type="text/css"/>
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand amazon1" href="index.php"> Amazon ECE  
        <img src="Logo_ECE_Paris.png" width="110" height="30"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
             <div class="dropdown">
              <button class="btn nav-link dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Catégorie<ion-icon name="clipboard"></ion-icon>

              </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

              <a class="dropdown-item" href="Livres.php">Livres <ion-icon name="book"></ion-icon></a>

              <a class="dropdown-item" href="Musique.php">Musiques <ion-icon name="volume-high"></ion-icon></a>

              <a class="dropdown-item" href="Sports&Loisirs.php">Sports et loisirs <ion-icon name="basketball"></ion-icon></a>

              <a class="dropdown-item" href="Vetements.php">Vetements <ion-icon name="woman"></ion-icon></ion-icon></a>

            </div>
          </div> 
          </li>

         
          <li class="nav-item active">
            <a class="nav-link" href="topventes.php">Top ventes<ion-icon name="bookmark"></ion-icon></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="vendeur_login.php">Vendre<ion-icon name="briefcase"></ion-icon></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="acheteur_login.php">Votre compte<ion-icon name="person"></ion-icon></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="panier.php">Panier<ion-icon name="cart"></ion-icon></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin_login.php">Admin<ion-icon name="school"></ion-icon></a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

 <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
 <br>
 <br>
 <center>
  <br>
      <h1>TOP VENTES</h1>
    </center>
<section class="pricing py-5">
  <div class="container">
    <center>
    <div class="row">
     

    <br>
    <br>
      <!-- Free Tier -->
<?php 

if ($db_found) {
    
    $sql = "SELECT * FROM Categorie";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)){
      
      $ID = $data['IDBestSeller'];
   


        $sql = "SELECT * FROM Type WHERE ID= $ID";
        $result2= mysqli_query($db_handle, $sql);

           while ($data2 = mysqli_fetch_assoc($result2)){ 

?>
        
        <div class="col-lg-6">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center"> BestSeller <?php echo $data['Nom']; ?>  </h5>
            <h6 class="card-price text-center"><?php echo $data2['Nom']; ?></h6>
            <hr>
            <ul class="fa-ul">
              <center>
              <a href="#"><img src=<?php echo $data2['Photo']; ?> class="rounded" alt="..." ></a>
            </center>
              <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data2['Description']; ?></li>
              
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Ajouter au panier</a>
          </div>
        </div>
      </div>

      <?php
        
    }

}
  
}//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle); 

?>

      
    </div>
  </center>
    </div>
  </div>
</section>

</body>

</html>