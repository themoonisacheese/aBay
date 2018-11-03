<?php
  include_once 'model/Panier.class.php';
  if (!isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = new Panier();
  }
  $panier = $_SESSION['panier'];
  include 'view/Header.view.php';
 ?>
