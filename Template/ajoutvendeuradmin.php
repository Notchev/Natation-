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
  <nav class="navbar  navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand amazon1" href="#"> Amazon ECE  
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
          <img src="profil.png" width="30" height="30">






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



    $sql = "SELECT * FROM Admin WHERE ID = $id";


 $result = mysqli_query($db_handle, $sql);

      
        while ($data = mysqli_fetch_assoc($result)){
        
    //end while

?>
              <div class="col-md-12">
                <center>
                  <br><br><br>
                 <img src= <?php echo $data[Photo] ?> name="aboutme" width="200" height="200" class="arrondie">
                  

                  <div class="couleur text-center"> <?php echo $data['Prenom'] ?> <ion-icon name="checkmark-circle-outline"></ion-icon></div>
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
        <div class="list-group center-block">
           <a href="Interfaceadmin.php" class="list-group-item couleur1 text-center">Mon compte</a>
          <a href="Listevendeurs.php" class="list-group-item couleur1 text-center">Liste des vendeurs</a>
          <a href="Listearticles.php" class="list-group-item couleur1 text-center">Liste des articles</a>
          <a href="ajoutvendeuradmin.php" class="list-group-item couleur1 text-center active">Ajouter un vendeur</a>
          <a href="ajoutarticleadmin.php" class="list-group-item couleur1 text-center">Ajouter un article</a>
        </div>


      </div>

      <div class="col-lg-12">

        <br><br><br>

        <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Ajout d'un vendeur </h5>
            <form class="form-commander" action="AjouterVendeur.php" method = "post" enctype="multipart/form-data">

              <br>
      
<hr>
 <h6 class="text-center"> Informations personnelles </h6>

              <div class="form-label-group">
                <input type="text" name="Nom" class="form-control" placeholder="Nom" required autofocus>
                <label for="Nom"></label>
              </div>

              <div class="form-label-group">
                <input type="text" name="Prenom" class="form-control" placeholder="Prenom" required>
                <label for="Prenom"></label>
              </div>

               <div class="form-label-group">
                <input type="mail" name="Email" class="form-control" placeholder="Mail" required>
                <label for="Email"></label>
              </div>

 <h6 class="text-center"> Identifiants </h6>

               <div class="form-label-group">
                <input type="text" name="Login" class="form-control" placeholder="Login" required>
                <label for="Login"></label>
              </div>
              
               <div class="form-label-group">
                <input type="mdp" name="Mdp" class="form-control" placeholder="Mdp" required>
                <label for="Mdp"></label>
              </div>

              <hr>

        <h6 class="text-center"> Photo de profil </h6>
       
              <div class="form-label-group">
                <input type="file" name="Photo" class="form-control" placeholder="Photo" required>
                <label for="Photo"></label>
              </div>
              <h6 class="text-center"> Photo de couverture </h6>

<div class="form-label-group">
                <input type="file" name="Fond" class="form-control" placeholder="Fond" required>
                <label for="Fond"></label>
              </div>
             

             <hr color="black">

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Valider</button>
              

            </form>
          </div>
        </div>
      </div>
   

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<br><br><br><br><br>
  <!-- Footer -->
  <footer class="py-5 bg-dark">  
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
