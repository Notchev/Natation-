<!DOCTYPE html>
<html lang="en">

<head>



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


  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body"><hr color="black"><hr color="black">
            <h5 class="card-title text-center titre">Enregistrez-vous</h5><hr color="black"><hr color="black">
            <form class="form-signin" action="InscriptionAcheteursPanier.php" method="post">

              <br>
              <hr>
              <div class="form-label-group">
                <input type="text" name="Prenom" class="form-control aa" placeholder="Prénom" required autofocus>
                <label for="Prenom"></label>
              </div>

              <div class="form-label-group">
                <input type="text" name="Nom" class="form-control aa" placeholder="Nom" required autofocus>
                <label for="Nom"></label>
              </div>


              <div class="form-label-group">
                <input type="email" name="inputEmail" class="form-control aa" placeholder="Adresse Email" required>
                <label for="inputEmail"></label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="text" name="Login" class="form-control aa" placeholder="Login" required>
                <label for="Login"></label>
              </div>


              <div class="form-label-group">
                <input type="password" name="inputPassword" class="form-control aa" placeholder="Mot de passe" required>
                <label for="inputPassword"></label>
              </div>
              
              <div class="form-label-group">
                <input type="password" name="inputConfirmPassword" class="form-control aa" placeholder="Confirmez votre mot de passe" required>
                <label for="inputConfirmPassword"></label>
              </div>

              <hr>
              <h6 class="text-center titre"> Coordonnées</h6>

              <div class="form-label-group">
                <input type="adress" name="inputadress" class="form-control aa" placeholder="Adresse" required>
                <label for="inputadress"></label>
              </div>

              <div class="form-label-group">
                <input type="adress" name="inputadress2" class="form-control aa" placeholder="Adresse" required>
                <label for="inputadress2"></label>
              </div>


              <div class="form-label-group">
                <input type="ville" name="inputville" class="form-control aa" placeholder="Ville" required>
                <label for="inputville"></label>
              </div>

              <div class="form-label-group">
                <input type="codepostale" name="inputcodepostale" class="form-control aa" placeholder="Code postale" required>
                <label for="inputcodepostale"></label>
              </div>

              <div class="form-label-group">
                <input type="pays" name="inputpays" class="form-control aa" placeholder="Pays" required>
                <label for="inputpays"></label>
              </div>

              <br>

              <div class="form-label-group">
                <input type="tel" name="inputel" class="form-control aa" placeholder="Numéro de téléphone" required>
                <label for="inputel"></label>
              </div>

              <hr>

              <h6 class="text-center titre"> Paiement</h6>


                <select name=inputtypecarte class="form-control aa">
                  <option value=Typecarte>Type de carte</option>
                 <option value=visa>Visa</option>
                 <option value=mastercard>Mastercard</option>
                </select>

                <br>

               <div class="form-label-group">
                <input type="Numerocarte" name="inputnumerocarte" class="form-control aa" placeholder="Numéro de carte" required>
                <label for="inputnumerocarte"></label>
              </div>

               <div class="form-label-group">
                <input type="Nomcarte" name="inputnomcarte" class="form-control aa" placeholder="Nom" required>
                <label for="inputnomcarte"></label>
              </div>

               <div class="form-label-group">
                <input type="Date" name="inputdate" class="form-control aa" placeholder="Date d'expiration" required>
                <label for="inputdate"></label>
              </div>

               <div class="form-label-group">
                <input type="Crypto" name="inputcrypto" class="form-control aa" placeholder="Cryptogramme" required>
                <label for="inputcrypto"></label>
              </div>



              <button class="btn btn-lg btn-primary btn-block text-uppercase aa" type="submit">Enregistrer</button>
              <a class="d-block text-center mt-2 small" href="acheteur_login.php">S'identifer</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

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