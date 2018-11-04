<?php include_once 'model/DAO.class.php';
include_once 'model/Article.class.php';
$article = $dao->fetchArticle($_GET['ref']);
include_once 'model/Panier.class.php';

if (isset($_POST['id']) && isset($_POST['qte'])) {
  if (!isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = new Panier();
  }
  $_SESSION['panier']->addArticle($_POST['id'], $_POST['qte']);
  header('Location: '.$_SERVER['REQUEST_URI']);
}
include 'controler/Header.ctrl.php';
include 'view/Article.view.php';
include 'controler/Footer.ctrl.php';?>
