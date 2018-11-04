<?php include_once 'model/DAO.class.php';
include_once 'model/Panier.class.php';
include_once 'model/Article.class.php';
session_start();
include_once 'model/Panier.class.php';
if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = new Panier();
}
$panier = $_SESSION['panier'];
foreach ($panier->contenu as $ref => $value) {
  $articles[$ref] = $dao->fetchArticle($ref);
}
include 'controler/Header.ctrl.php';
include 'view/Panier.view.php';
include 'controler/Footer.ctrl.php';
?>
