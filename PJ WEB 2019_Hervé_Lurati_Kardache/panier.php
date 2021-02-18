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

            session_start();
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


      <br>

      <!-- Page Content -->
      <div class="container">
        <form action="Commander.php" method="post">

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

              <select name= <?php echo "quantite".$i ;?> id= <?php echo "quantite".$i ;?>   onChange = "sum()"> 
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
      <div class="col-lg-12">
        <br>
        <div class="carree aa">

        <h4><div class="ba"> <center>Sous-total</center></div></h4>

        <h5> <p> 
         <center> <button name="result" id = "result" > </button></center>
        </p>
      </h5>
       <hr color="black">
      <p> 
        <center>
        <button class="btn btn-secondary float-right center aa"  type="submit" >Passer commande</button>
      </center>
        </p>
</div>
    </div>
  </div>
</form>
<form action="ViderPanier.php" method="post">
        <p> 
        <center>
        <button class="btn btn-danger float-right center aa"  type="submit" >Vider le panier</button>
      </center>
        </p>
      </form>


</div>



<br><br>

 <footer class="py-3 navbar-gre">
    <div class="container">
         <p class="m-0 text-center text-white">Copyright &copy; Amazon'ECE 2019</p>
    </div>
    <!-- /.container -->


  </footer>


<!-- Bootstrap core JavaScript -->


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
    document.getElementById("result").value = tot;
  }
</script>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

<!-- /.row -->
</html>