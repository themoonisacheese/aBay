

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<link rel="stylesheet" href="view/Header.view.css">

<div id="wrap">

  <header>
  </header>

  <nav>
    <ul>
      <li><a href="#"><img src="view/images/home.png" alt=""></a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="panier.php">Panier <?php
        if ($panier->nombreDArticles() > 0) {
          echo "(".$panier-nombreDArticles().")";
        }
       ?></a></li>
      <li><a href="#">Connexion</a></li>
      <li><a href="#">Forum</a></li>
    </ul>
  </nav>
