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
$id = $_SESSION['ID'];
//si le BDD existe, faire le traitement
if ($db_found) {
  ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Amazon ECE</title>
  <?php session_start();

//identifier le nom de base de données
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement
if ($db_found) { ?>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="fond.css" type="text/css" media="screen"/>

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</head>


<?php 
    $sql = "SELECT * FROM Vendeur WHERE ID= $id";
    $result = mysqli_query($db_handle, $sql);
      while ($data2 = mysqli_fetch_assoc($result)) {
    ?>
<body style= "background: url(<?php echo $data2['Fond'] ?>) no-repeat center center fixed">
<?php
 }
}
 ?>

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
  <div class="container">





        <?php 
        $id = $_SESSION['ID'];
    $sql = "SELECT * FROM Vendeur WHERE ID= $id";
    $result = mysqli_query($db_handle, $sql);
      while ($data = mysqli_fetch_assoc($result)){
   ?>

              <div class="col-md-12">
                <center>
                  <br><br><br>
                 <img src=<?php echo $data['Photo'] ?> name="aboutme" width="200" height="200" class="arrondie">
                  

                  <div class="couleur text-center"><?php echo $data['Nom'] ?></div>
                </center>
              </div>
 <?php   }
    }
//end if
//si le BDD n'existe pas
else {
    echo "Database not found";
}//end else


       ?>
           

                    <div class="col-lg-12">

        <br><br><br>
        <div class="list-group center-block">
          <a href="interfacevendeurs.php" class="list-group-item couleur1 text-center active">Mon compte</a>
          <a href="ajoutarticle.php" class="list-group-item couleur1 text-center">Ajouter</a>

        </div>


      </div>


      <div class="col-lg-12">

        <br><br><br>
         <div class="row">

 <?php 
    $sql = "SELECT * FROM TYPE WHERE IDVendeur= $id";
    $result2 = mysqli_query($db_handle, $sql);
    if ($db_found) {
      while ($data2 = mysqli_fetch_assoc($result2)){
   ?>
       

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src=<?php echo $data2['Photo']?> alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $data2['Nom']?></a>
                </h4>
                <h5><?php echo $data2['Prix']. € ?></h5>
                <p class="card-text"><?php echo $data2['Description']?> </p>
              </div>

              <form action="SupprimerArticle.php" method="post">
                  <table>
                  

             <td> <input type="hidden" name="IDArticlechoisi" value= <?php echo $data2[ID] ?>> </td>
                          <td> <input type="hidden" name="Idinterface" value= "vendeur"> </td>

              <div class="card-footer">
                <input class="btn btn-danger" type="submit" value="Supprimer">
              </div>
            
            </table>
                </form>

              
            </div>
          </div>

        <!-- /.row -->

     

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
      <!-- /.col-lg-9 --> 


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

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
