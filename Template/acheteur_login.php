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
?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Amazon ECE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css.css" rel="stylesheet" type="text/css"/>

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand amazon1" href="index.php"> Amazon ECE  
        <img src="Logo_ECE_Paris.png" width="90" height="20"></a>
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

              <a class="dropdown-item" href="Sports&loisirs.php">Sports et loisirs <ion-icon name="basketball"></ion-icon></a>

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



<body>

  <div class="container">

    <div class="row">
      <div class="col-sm-11 col-md-9 col-lg-7 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

            <h6 class="card-title text-center">Se connecter</h6>


            <form class="form-signin" action = "FormConnexion.php" method="post" >
              <div class="form-label-group">
                <input type="text" name="Login" class="form-control" placeholder="Login" required autofocus>


              </div>

              <div class="form-label-group">
                <label for="inputPassword"> </label>

                <input type="password" name="Mdp" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
              </div>
                
               <input type="hidden" name="user" value= "Acheteur"> 

              <div class="custom-control custom-checkbox mb-7">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Connexion</button>

               <a href="inscriptionacheteurs.php" class="btn btn-lg btn-primary btn-block text-uppercase" role="button">Créer un compte</a>


              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>