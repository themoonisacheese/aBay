<?php include_once 'model/DAO.class.php';
include_once 'model/Article.class.php';
$article = getArticle($GET_['ref']);
include 'controler/header.ctrl.php';
include 'view/Article.view.php';
include 'controler/footer.ctrl.php'?>
