<?php
include_once 'model/DAO.class.php';
include_once 'model/Article.class.php';
include_once 'model/Categorie.class.php';
$best = $dao->fetchBest();
$categories= $dao->fetchCategorie(1);
$dao->fetchTree($categories);
include_once 'controler/Header.ctrl.php';
include 'view/Home.view.php';
include_once 'controler/Footer.ctrl.php';
?>
