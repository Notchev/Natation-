

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

<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">
      <br>
      <h1 class="my-4">Catégories</h1>
      <div class="list-group">
        <br>
        <a href="Livres.php" class="list-group-item">Livres</a>
        <a href="Musique.php" class="list-group-item">Musique</a>
        <a href="Sports&Loisirs.php" class="list-group-item">Sports&Loisirs</a>
        <a href="Vetements.php" class="list-group-item active">Vêtements</a>
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


        
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="Shopping.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="Shopping.jpg" alt="Second slide">
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

      <div class="row">

       
        <?php
     //declaration des variables
     $IDArticlechoisi = isset ($_POST["IDArticlechoisi"])? $_POST["IDArticlechoisi"] : ""; //if-then-else (si vrai : $nom = $_POST["nom"] si faux : "") 
     $Genre = isset ($_POST["Genre"])? $_POST["Genre"] : "";
     $erreur = "";



     if ($db_found) {

      $sql = "SELECT * FROM ArticleVetement WHERE ( IDType = $IDArticlechoisi AND Modele = '$Genre' ) GROUP BY Couleur" ;
      $result = mysqli_query($db_handle, $sql);

      
      while ($data = mysqli_fetch_assoc($result)){
        


       ?>

       <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src=<?php echo $data[Photo] ?> alt=""> 
          <div class="card-body">
            <h4 class="card-title">
              <?php echo $data[Nom] ?>
            </h4>
            <form action="AjouterPanier.php" method="post">
              <table>
                
                <td> <input type="hidden" name="ID" value= <?php echo $IDArticlechoisi ?>> </td>
                <td> <input type="hidden" name="CouleurChoisi" value= <?php echo $data['Couleur'] ?>> </td>
                <td> <input type="hidden" name="GenreChoisi" value= <?php echo $Genre ?>> </td>
                <td> <input type="hidden" name="IDCategorie" value= 4 > </td>
                <tr> <select name="taille">
                  <?php
     //declaration des variables

                  $Couleur = $data['Couleur'];

                  if ($db_found) {

                    $sql = "SELECT * FROM ArticleVetement WHERE ( IDType = $IDArticlechoisi AND Modele = '$Genre' AND Couleur = '$Couleur') GROUP BY Taille" ;
                    $result2 = mysqli_query($db_handle, $sql);

                    
                    while ($data2 = mysqli_fetch_assoc($result2)){
                      
                     ?>

                     <option value=<?php echo $data2['Taille']; ?>  > <?php echo $data2['Taille']; ?>  </option>
                     

                   <?php  }
                 }
    //end if
    //si le BDD n'existe pas
                 else {
                  echo "Database not found";
    }//end else
    //fermer la connection

    ?>
  </select>
</tr>

<tr>
  <td>
    <button class="btn btn-primary" type="submit"> Ajouter au panier</button>
  </td>
</tr>
</table>
</form>


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
