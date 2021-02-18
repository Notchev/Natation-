<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    session_start();



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
  <nav class="navbar  navbar-expand-lg navbar-grey fixed-top">
    <div class="container">
       
        <h3 class="text-uppercase white mb-0"> 
          <div class=title> Amazon'ECE </div>
          </h3>
     
      <!--<a class="navbar-brand amazon1" href="#"><div class="ama"><b>Amazon ECE </b><img src="Logo_ECE_Paris.png" width="100" height="80"></div> 
      </a>-->

    <div class=total>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">

          <li class="nav-item active">
            <a class="nav-link" href="index.php">
              <div class="bar">Home<ion-icon name="home"></ion-icon>
            </div>
          </a>
          </li>

             <div class="dropdown">
              <button class="btn nav-link dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="bar">
               Catégorie<ion-icon name="clipboard"></ion-icon>
             </div>

              </button>



            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

              <a class="dropdown-item " href="Livres.php"><div class="ba">Livres <ion-icon name="book"></ion-icon></div></a>

              <a class="dropdown-item" href="Musique.php"><div class="ba">Musique <ion-icon name="volume-high"></ion-icon></div></a>

              <a class="dropdown-item" href="Sports&Loisirs.php"><div class="ba">Sports et loisirs <ion-icon name="basketball"></ion-icon></div></a>

              <a class="dropdown-item" href="Vetements.php"><div class="ba">Vetements <ion-icon name="woman"></ion-icon></ion-icon></div></a>
              <div class="dropdown-divider"></div>

              </div>
    </div> 
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="topventes.php">
              <div class="bar">Top ventes<ion-icon name="bookmark"></ion-icon>
              </div>
            </a>
          </li>

           <li class="nav-item active">
            <a class="nav-link" href=  
            <?php 
            $user = $_SESSION['Utilisateur'];
            if ($user == "Vendeur") 
              { echo "Interfacevendeurs.php" ;} 
             else 
              { echo "vendeur_login.php" ;} 
            ?> 

            ><div class="bar">Vendeur<ion-icon name="briefcase"></ion-icon></div></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href= 

            <?php 
           
            if ($user == "Acheteur") 
              { echo "Interfaceacheteurs.php" ;} 
            else 
              { echo "acheteur_login.php" ;} 
           
            ?> ><div class="bar">Acheteur<ion-icon name="person"></ion-icon></div></a>
          </li>
         
          <li class="nav-item active">
            <a class="nav-link" href="panier.php"><div class="bar">Panier<ion-icon name="cart"></ion-icon></div></a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link" href=<?php 
            
         
            if ($user == "Admin") 
              { echo "Interfaceadmin.php" ;} 
             else
              { echo "admin_login.php" ;} 
           
            ?>><div class="bar">Admin<ion-icon name="school"></ion-icon></div></a>
          
          </li>

    
            <div class=pull-right>
            
                                 <li class="nav-item active bar  ">
   
                         <h7>  <?php  echo $Prenom = $_SESSION ['Prenom']; ?> </h7>
             <br>
             <center>
              <img src = <?php  echo $_SESSION ['Photo']; ?>  class="arr">
             </center>
                   

                
              </div>


        </div>

</div>

   
      </div>
    </div>
  </nav>


   <!-- Page Content -->
<!-- Page Content -->
<div class="container">
      <br>
    <br>
        <br>


    
  <div class="row">

    <!-- 1 -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-0 shadow">
         <div class="card-body text-center">
          <h5 class="card-title mb-0">Catégories</h5>
         
      <div class="col-lg-12">

        <br>
        <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="Livres.php"><img src="livre1.jpg" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          
         <div class="barr"> <p><b>Livres</b></p></div>
        </div>
      </div>
      <div class="carousel-item">
        <a href="Musique.php"><img src="musique1.jpg" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">


         <div class="barr"> <p><b>Musique</b></p></div>
        </div>
      </div>
      <div class="carousel-item">
        <a href="Sports&Loisirs.php"><img src="sport1.jpg" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          
         <div class="barr"> <p><b>Sports et Loisirs</b></p></div>
        </div>
      </div>
      <div class="carousel-item">
        <a href="Vetements.php"><img src="vetements1.jpg" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          
         <div class="barr"> <p><b>Vetements</b></p></div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  


  </div>
    </div>
      </div>
          </div>

        </div>


      </div>


   <!-- Team Member 1 -->
<div class="col-xl-6 col-md-6 mb-4">

  <div class="card border-0 shadow">
    <div class="card-body text-center"><h5 class="card-title mb-0">Top Ventes</h5> </div>

    <div class="row mx-md-n5">
       <div class="col px-md-5">

    
      
         <center>
                <a href="Topventes.php"><img src="topsale.jpg" class="tailleimagetv" alt="..." ></a>   
</center>
<br>


     
                </div>
              </div>
         
        </div>
             


      </div>
    </div>



</div>
</div>
  <!-- /.row -->

<!-- /.container -->

  <!-- Footer -->
   <footer class="py-3 navbar-gre">
    <div class="container">
         <p class="m-0 text-center text-white">Copyright &copy; Amazon'ECE 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
