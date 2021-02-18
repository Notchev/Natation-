<?php
session_start();

 $_SESSION['PanierCategorie']=array();
  $_SESSION['PanierType']=array();
  $_SESSION['PanierArticle']=array();

  header('Location: Panier.php'); 
      ?>