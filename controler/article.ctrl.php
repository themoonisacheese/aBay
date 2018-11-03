<?php include_once 'model/DAO.class.php';
include_once 'model/Article.class.php';
$article = $dao->fetchArticle($_GET['ref']);
include 'controler/Header.ctrl.php';
include 'view/Article.view.php';
include 'controler/Footer.ctrl.php';?>
