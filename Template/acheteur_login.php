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
  <nav class="navbar  navbar-expand-lg navbar-grey fixed-top">
    <div class="container">
        <h3 class="text-uppercase white mb-0">Amazon'ECE</h3>
      <!--<a class="navbar-brand amazon1" href="#"><div class="ama"><b>Amazon ECE </b><img src="Logo_ECE_Paris.png" width="100" height="80"></div> 
      </a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">

             <div class="dropdown">
              <button class="btn nav-link dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="bar">
               Catégorie<ion-icon name="clipboard"></ion-icon></div>

              </button>

            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

              <a class="dropdown-item " href="#"><div class="ba">Livres <ion-icon name="book"></ion-icon></div></a>

              <a class="dropdown-item" href="#"><div class="ba">Musiques <ion-icon name="volume-high"></ion-icon></div></a>

              <a class="dropdown-item" href="#"><div class="ba">Sports et loisirs <ion-icon name="basketball"></ion-icon></div></a>

              <a class="dropdown-item" href="#"><div class="ba">Vetements <ion-icon name="woman"></ion-icon></ion-icon></div></a>
              <div class="dropdown-divider"></div>

            </div>
          </div> 
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Top ventes<ion-icon name="bookmark"></ion-icon></div></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Vendre<ion-icon name="briefcase"></ion-icon></div></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Votre compte<ion-icon name="person"></ion-icon></div></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Panier<ion-icon name="cart"></ion-icon></div></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Admin<ion-icon name="school"></ion-icon></div></a>
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
  <!-- Footer -->
  <footer class="py-3 navbar-gre">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
</body>