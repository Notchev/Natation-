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
        
        <div class="col-lg-6" style="margin-bottom:20px">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body" >
            <h5 class="card-title text-muted text-uppercase text-center"> BestSeller <?php echo $data['Nom']; ?>  </h5>
            <h6 class="card-price text-center"><?php echo $data2['Nom']; ?></h6>
            <hr>
            
              <center>
              <a href="#"><img src=<?php echo $data2['Photo']; ?> class="rounded tailleimage2"  alt="..." ></a>
            </center>
              <span class="fa-li"><i class="fas fa-check"></i></span><?php echo $data2['Description']; ?>
              
            
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
  <!-- Footer -->
  <footer class="py-3 navbar-gre">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Amazon'ECE 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  
  <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>