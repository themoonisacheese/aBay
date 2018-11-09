<?php include_once 'model/Article.class.php';
include_once 'model/Categorie.class.php';
include_once 'model/Panier.class.php';
include_once 'model/DAO.class.php';
if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = new Panier();
}
$panier = $_SESSION['panier'];

$articlesSansStock = array();

foreach ($panier->contenu as $ref => $qte) {
  $art = $dao->fetchArticle($ref);
  if ($art->stock < $qte) {
    array_push($articlesSansStock, $art);
  }
}

if (count($articlesSansStock) == 0) {
  foreach ($panier->contenu as $ref => $qte) {
    $dao->acheter($ref, $qte);
  }
  unset($_SESSION['panier']);
  unset($panier);
}

include 'controler/Header.view.php';
include 'view/Commande.view.php';
include 'controler/Footer.view.php';
 ?>
