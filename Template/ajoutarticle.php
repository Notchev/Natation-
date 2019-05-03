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
if ($db_found) {
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
          <a href="interfacevendeurs.php" class="list-group-item couleur1 text-center">Mon compte</a>
          <a href="ajoutarticle.php" class="list-group-item couleur1 text-center active">Ajouter</a>

        </div>


      </div>

          <center>

      <div class="col-lg-9">

        <br><br><br>
         <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Ajout d'un article </h5>
            <form class="form-commander" action="AjouterArticleVendeur.php" method = "post" enctype="multipart/form-data">

              <br>
              <hr>
                            <h6 class="text-center"> Catégorie</h6>

                             <select name= "Categorie">
                  <option value=IDcategorie>Catégorie</option>
                 <option value=Livres>Livres</option>
                 <option value=Musique>Musique</option>
                <option value=Sports&Loisirs>Sports&Loisir</option>
                 <option value=Vetements>Vêtements</option>

                </select>
<hr>
 <h6 class="text-center"> Caractéristiques</h6>

              <div class="form-label-group">
                <input type="text" name="Nom" class="form-control" placeholder="Nom" required autofocus>
                <label for="Nom"></label>
              </div>

              <div class="form-label-group">
                <input type="text" name="Description" class="form-control" placeholder="Description" required>
                <label for="Description"></label>
              </div>

               <div class="form-label-group">
                <input type="prix" name="Prix" class="form-control" placeholder="Prix" required>
                <label for="Prix"></label>
              </div>
              
               <div class="form-label-group">
                <input type="quantite" name="Quantite" class="form-control" placeholder="Quantite" required>
                <label for="Quantite"></label>
              </div>
              <hr>
        <h6 class="text-center"> Photo </h6>
       
              <div class="form-label-group">
                <input type="file" name="Photo" class="form-control" placeholder="Photo" required>
                <label for="Photo"></label>
              </div>

             

             <hr color="black">

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Valider</button>
              

            </form>
          </div>
        </div>
      </div>

    </div>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
 </center>
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







