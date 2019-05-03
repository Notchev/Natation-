<!DOCTYPE html>
<html lang="en">

<head>

<?php 
session_start();
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Amazon ECE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="fond.css" type="text/css" media="screen"/>

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

  <!-- Page Content -->
  <div class="container">

    <?php
if ($db_found) 
{
    $id= $_SESSION ['ID'];

    $sql = "SELECT * FROM Acheteur WHERE ID = $id";
    $result = mysqli_query($db_handle, $sql);

        while ($data = mysqli_fetch_assoc($result)){
        
    //end while
?>

              <div class="col-md-12">
                <center>
                  <br><br><br>
                 <img src= <?php echo $data[Photo] ?> name="aboutme" width="200" height="200" class="arrondie">
                  

                  <div class="couleur text-center"><b> <?php echo $data['Nom'] ." " . $data ['Prenom']?></b></div>
                </center>
              </div>
     <?php   }
        }

 else {
        echo "Database not found";
    }//end else
    //fermer la connection
    mysqli_close($db_handle);
           ?>



                    <div class="col-lg-12">

        <br><br><br>
        <hr><div class="titre"><center><b><u>Identifiant</u></b></center></div><hr>
        <div class="cadre"><center><div class="ecrit">Login</div></center></div>
        <div class="cadre"><center><div class="ecrit">Mot de passe</div></center></div>

        <hr><div class="titre"><center><b><u>Coordonnés</u></b></center></div><hr>

        <div class="cadre"><center><div class="ecrit">Numéro de tel</div></center></div>
        <div class="cadre"><center><div class="ecrit">E mail</div></center></div>

        <hr><div class="titre"><center><b><u>Adresse</u></b></center></div><hr>

        <div class="cadre"><center><div class="ecrit">Adresse</div></center></div>
        <div class="cadre"><center><div class="ecrit">Ville</div></center></div>
        <div class="cadre"><center><div class="ecrit">Code postale</div></center></div>
        <div class="cadre"><center><div class="ecrit">Pays</div></center></div>

        <hr><div class="titre"><center><b><u>Moyen de paiement</u></b></center></div><hr>

        <div class="cadre"><center><div class="ecrit">Type de carte</div></center></div>
        <div class="cadre"><center><div class="ecrit">Numéro</div></center></div>
        <div class="cadre"><center><div class="ecrit">Date</div></center></div>
        <div class="cadre"><center><div class="ecrit">Crypto</div></center></div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-3 navbar-gre">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
