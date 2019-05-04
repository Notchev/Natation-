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

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>

        <script language="javascript" src="http://code.jquery.com/jquery-latest.js"></script>

      </head>

      <body>

        <!-- Navigation -->
        <nav class="navbar  navbar-expand-lg navbar-dark bg-primary fixed-top">
          <div class="container">
            <a class="navbar-brand amazon1" href="index.php"> Amazon ECE  
              <img src="Logo_ECE_Paris.png" width="90" height="20"></a>
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



      <br>

      <!-- Page Content -->
      <div class="container">

        <!-- Page Heading -->
        <center>
         <br>
         <h1>Panier</h1>
         <hr>
         <br>
         <br>
       </center>

       <!-- Project One -->
       <?php
       session_start();

          //identifier le nom de base de données
       $database = "Projet";
      //connectez-vous dans votre BDD
      //Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
       $db_handle = mysqli_connect('localhost', 'root', 'root' );
       $db_found = mysqli_select_db($db_handle, $database); ?>


       <input type = "hidden" id = "QuantiteTotal" value = <?php echo sizeof($_SESSION['PanierCategorie']) ?>>

       <?php

       for( $i=0 ; $i < sizeof($_SESSION['PanierCategorie']) ; $i++ ){
        $id = $_SESSION['PanierType'][$i];
        $sql = "SELECT * FROM Type WHERE ID = '$id' GROUP BY ID";
        $result = mysqli_query($db_handle, $sql);
        $data =  mysqli_fetch_assoc($result);

        if($_SESSION['PanierCategorie'][$i]!=4){

          ?>

          <div class="row">

            <div class="col-md-7">
              <center>

                <a href="#"><img class="img-fluid rounded mb-7 mb-md-0" src=<?php echo $data['Photo']?> alt="">
                </a>
              </center>
            </div>

            <div class="col-md-5">
              <h4> <?php echo $data['Nom']?> </h4>
              <div align="justify">
                <p> <?php echo $data['Description']?> </p>
                <p> <?php echo $data['Prix'] . "€" ?> </p>
                <input type = "hidden" id = <?php echo "prix".$i ;?> value = <?php echo $data['Prix'] ?>> 
              </div>

              <select name= "choixquantite" id= <?php echo "quantite".$i ;?>   onChange = "sum()"> 
                <?php 

                for ($j=1; $j<=$data['QuantiteDispo']; $j++)
                {
                 ?>
                 <option value = <?php echo $j ?> > <?php echo $j ?> </option> 

               <?php } ?>


             </select>

             <br> <br>


           </div>

           <br> <br>
         </div>

       <?php }

       else{

        $idarticle= $_SESSION['PanierArticle'][$i];

        $sql= "SELECT * FROM ArticleVetement WHERE ID= $idarticle";

        $result = mysqli_query ($db_handle, $sql);
        $data3 = mysqli_fetch_assoc($result);


        ?>
        <div class="row">

          <div class="col-md-7">
            <center>

              <a href="#"><img class="img-fluid rounded mb-7 mb-md-0" src=<?php echo $data3['Photo'];  ?> alt="">
              </a>
            </center>
          </div>

          <div class="col-md-5">
            <h4> <?php echo $data['Nom']?> </h4>
            <div align="justify">
              <p> <?php echo $data['Description']?> </p>
              <p> <?php echo $data['Prix'] . "€" ?> </p>
              <td> 
                <input type = "hidden" id =  <?php echo "prix".$i;?>  value = <?php echo $data['Prix'] ?> > 
              </td>
            </div>

            <select name= "choixquantite" id=  <?php echo "quantite".$i ;?>  onChange="sum()"> 

              <option value = 1 > 1 </option> 


            </select>

            <br> <br>


          </div>


          <br> <br>
        </div>

        <?php


      }
    } ?>
    <hr>






    <br><br>
    <hr color = "black">


    <div class="row">
      <div>
        <br>

        <button class="btn btn-secondary float-right" > Sous-total</button>
        <h5> <p> 
          Le résultat est: <br>
          <span id = "result"> </span>
        </p>
      </h5>
      <p> 


       <div align = right>
        <button class="btn btn-secondary float-right" type="submit" >Passer commande</button>
      </div>

    </div>
  </div>
</div>

<br><br>

<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">

  $(document).ready(sum());

  function sum() {

    var QuantiteTotal = document.getElementById("QuantiteTotal").value;
    var i =0;
    var tot=0;
    var prix = "";
    var quantite = "";
    for (i=0; i<QuantiteTotal; i++)
    {
      prix = "prix"+i;
      quantite = "quantite"+i;
      tot+= document.getElementById(prix).value * document.getElementById(quantite).value

    }
    console.log(tot);

    document.getElementById("result").innerHTML = tot ;
  }
</script>


</body>

<!-- /.row -->
</html>