<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    session_start();

    if($_SESSION['PanierCategorie'] && $_SESSION['PanierType'] && $_SESSION['PanierArticle'] && $_SESSION['PrixPanier']){
      $_SESSION['PanierCategorie']=array();
      $_SESSION['PanierType']=array();
      $_SESSION['PanierArticle']=array();
       $_SESSION['PrixPanier']=0;
    }else{
      $_SESSION['PanierCategorie']=array();
      $_SESSION['PanierType']=array();
      $_SESSION['PanierArticle']=array();
       $_SESSION['PrixPanier']=0;

    }


//identifier le nom de base de données
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

        </ul>
      </div>
      
    </div>
  </nav>

  <!-- Page Content -->
<div class="container">
      <br>
    <br>
        <br>


    
  <div class="row">

    <!-- Team Member 1 -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-0 shadow">
         <div class="card-body text-center">
          <h5 class="card-title mb-0">Catégories</h5>
         
        </div>
        <div class="row mx-md-n5">

           <div class="col px-md-5"><div class="p-3 border bg-light">
                <a href="Livres.php"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>   
                <a href="Musique.php"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>
                </div></div>
         
        </div>
                <div class="row mx-md-n5">

           <div class="col px-md-5"><div class="p-3 border bg-light">
                <a href="Sports&Loisirs.php"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>   
                <a href="Vetements.php"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>
           </div></div>
         
        </div>


        

      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-0 shadow">
         <div class="card-body text-center">
          <h5 class="card-title mb-0">Top ventes</h5>
         
        </div>
        <div class="row mx-md-n5">

           <div class="col px-md-5"><div class="p-3 border bg-light">
                <a href="topventes.php"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>   
                <a href="topventes.php"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>
           </div></div>
         
        </div>
                <div class="row mx-md-n5">

           <div class="col px-md-5"><div class="p-3 border bg-light">
                <a href="topventes.php"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>   
                <a href="topventes.php"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>
           </div></div>
         
        </div>

  </div>
</div></div>
  <!-- /.row -->

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