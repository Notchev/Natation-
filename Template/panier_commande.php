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

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Commande</h5>
            <form class="form-commander">

              <br>
              <hr>
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Prénom" required autofocus>
                <label for="inputUserame"></label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Adresse Email" required>
                <label for="inputEmail"></label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                <label for="inputPassword"></label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirmez votre mot de passe" required>
                <label for="inputConfirmPassword"></label>
              </div>

              <hr>
              <h6 class="text-center"> Coordonnées</h6>

              <div class="form-label-group">
                <input type="adress" id="inputadress" class="form-control" placeholder="Adresse" required>
                <label for="inputadress"></label>
              </div>

              <div class="form-label-group">
                <input type="ville" id="inputville" class="form-control" placeholder="Ville" required>
                <label for="inputville"></label>
              </div>

              <div class="form-label-group">
                <input type="codepostale" id="inputcodepostale" class="form-control" placeholder="Code postale" required>
                <label for="inputcodepostale"></label>
              </div>

              <div class="form-label-group">
                <input type="pays" id="inputpays" class="form-control" placeholder="Pays" required>
                <label for="inputpays"></label>
              </div>

              <br>

              <div class="form-label-group">
                <input type="tel" id="inputel" class="form-control" placeholder="Numéro de téléphone" required>
                <label for="inputel"></label>
              </div>

              <hr>

              <h6 class="text-center"> Paiement</h6>


                <select class=form-control>
                  <option value=Typecarte>Type de carte</option>
                 <option value=visa>Visa</option>
                 <option value=mastercard>Mastercard</option>
                </select>

                <br>

               <div class="form-label-group">
                <input type="Numerocarte" id="inputnumérocarte" class="form-control" placeholder="Numéro de carte" required>
                <label for="inputnumerocarte"></label>
              </div>

               <div class="form-label-group">
                <input type="Nomcarte" id="inputnomcarte" class="form-control" placeholder="Nom" required>
                <label for="inputnomcarte"></label>
              </div>

               <div class="form-label-group">
                <input type="Date" id="inputdate" class="form-control" placeholder="Date d'expiration" required>
                <label for="inputdate"></label>
              </div>

               <div class="form-label-group">
                <input type="Crypto" id="inputcrypto" class="form-control" placeholder="Cryptogramme" required>
                <label for="inputcrypto"></label>
              </div>





              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Payer</button>
              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

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