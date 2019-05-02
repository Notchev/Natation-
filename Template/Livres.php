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
          <li class="nav-item active">
            <img src = <?php  echo $Photo= $_SESSION ['Photo']; ?> height="50" width ="50" >
            <h7>  <?php  echo $Prenom= $_SESSION ['Prenom']; ?> </h7>

     
  
    

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <br>
        <h1 class="my-4">Catégories</h1>
        <div class="list-group">
          <br>
        
          <a href="Livres.php" class="list-group-item active">Livres</a>
          <a href="Musique.php" class="list-group-item">Musique</a>
          <a href="Sports&Loisirs.php" class="list-group-item">Sports&Loisirs</a>
          <a href="Vetements.php" class="list-group-item">Vêtements</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <br>
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            
          </ol>


<?php
$cat= 1;
//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement

if ($db_found) {

    $sql = "SELECT * FROM Categorie WHERE ID= $cat";
    $result = mysqli_query($db_handle, $sql);
      while ($data = mysqli_fetch_assoc($result)){
   ?>

          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src=<?php echo $data[Photo] ?> alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src=<?php echo $data[Photo2] ?> alt="Second slide">
            </div>
              </div>

    
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

   <?php   }
    }
//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
       ?>
           
        

        <div class="row">

   



<?php
$cat= 1;
//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement

if ($db_found) {

    $sql = "SELECT * FROM Type WHERE IDCategorie= $cat";
    $result = mysqli_query($db_handle, $sql);

    while ($data = mysqli_fetch_assoc($result)){ ?>

  <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src=<?php echo $data[Photo] ?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $data[Nom] ?></a>
                </h4>
                <h5><?php echo $data[Prix] . €?></h5>
                <p class="card-text"><?php echo $data[Description] ?></p>

                <button class="btn btn-primary" type="submit">Ajouter au Panier</button>
              </div>
              
            </div>
          </div>

      <?php   }
    }
//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
       ?>
        


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

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
