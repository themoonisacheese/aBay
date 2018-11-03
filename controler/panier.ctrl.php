<?php include_once 'model/DAO.class.php';
include_once 'model/Panier.class.php';
include_once 'model/Article.class.php';
session_start();
$panier = $_SESSION['panier'];
foreach ($panier as $key => $value) {
  $articles[$key] = $dao->fetchArticle($ref);
}
include 'controler/Header.ctrl.php';
include 'view/Panier.view.php';
include 'controler/Footer.ctrl.php';
?>
