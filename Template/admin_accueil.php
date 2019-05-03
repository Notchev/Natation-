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

<div class="container">

<div class="row">

    <!-- Team Member 1 -->
    <div class="col-xl-6 col-md-6 mb-4">
      <br>
      <br>
      <div class="card border-0 shadow">
         <div class="card-body text-center">
          <h5 class="card-title mb-0"><a  style = "text-decoration:none" href="Listearticles.php"> Liste des articles par catégorie</a> </h5>

         
        </div>

        <div class="row mx-md-n5">

           <div class="col px-md-5 text-center"><div class="p-3 border bg-light">

                <a href="Livres.php"><img src="iconelivre.png" class="rounded" alt="..." ></a> 
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                <a href="Sports&Loisirs.php"><img src="iconesport.png" class="rounded" alt="..." ></a>
                </div></div>
         
        </div>
                <div class="row mx-md-n5">

           <div class="col px-md-5"><div class="p-3 border bg-light">
                <a href="Vetements.php"><img src="iconevetement.png" class="rounded" alt="..." ></a>
                <a href="Musique.php"><img src="musiqueicone.png" class="rounded" alt="..." ></a>
           </div></div>
         
        </div>

      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-6 col-md-6 mb-4">
       <br>
      <br>
      <div class="card border-0 shadow">
         <div class="card-body text-center">
             <h5 class="card-title mb-0"><a  style = "text-decoration:none" href="Listevendeurs.php"> Liste des vendeurs </a> </h5>
        </div>
        <div class="row mx-md-n5">

           <div class="col px-md-5"><div class="p-3 border bg-light">
                <a href="#"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>   
                <a href="#"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>
           </div></div>
         
        </div>
                <div class="row mx-md-n5">

           <div class="col px-md-5"><div class="p-3 border bg-light">
                <a href="#"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>   
                <a href="#"><img src="https://source.unsplash.com/TMgQMXoglsM/250x175" class="rounded" alt="..." ></a>
           </div>
         </div>
         
        </div>

  </div>
</div>
</div>

  <!-- /.row -->
  </div>
  <!-- Footer -->
  <footer class="py-3 navbar-gre">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

</body>
</html>